<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

$jsonData = json_decode(file_get_contents('php://input', true));

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['HTTP_BX_AJAX']) {

    // make sure that session ID is exist
    if ($jsonData->sessid == bitrix_sessid()) {
        if (dataIsValid($jsonData)) {
            $content = getStringData($jsonData);
            makeIBlockElem($content);

        }
    } else {
        sendResponse('error', 'invalid token');
    }
} else {
    sendResponse('error', '!Post or !XMLHttpRequest', $_SERVER);
}
sendResponse('endof', '..');



function makeIBlockElem($content)
{
    $strText = is_array($content) ? implode('<br>', $content) : $content;
    if (CModule::IncludeModule('iblock')) {
        $blockElem = new CIBlockElement;
        $blockdata = array(
            "IBLOCK_ID" => 6,
            "NAME" => "feedback_catalog_form",
            "PREVIEW_TEXT" => $strText,
            "PREVIEW_TEXT_TYPE" => 'html',
        );
        if ($blockElem->Add($blockdata)) {
            sendResponse('ok', 'infoblock created');
        } else {
            sendResponse('error', 'infoblock not created', $blockElem->LAST_ERROR);
        }
    }
}

function getStringData($data)
{
    $stringData = [];
    foreach ($data as $attrName => $attrValue) {
        if ($attrName == 'sessid') {
            continue;
        }
        $stringData[] =  $attrName . ': ' . htmlspecialchars($attrValue);
    }
    return $stringData;
}

function dataIsValid($data)
{
    $rules = [
        'name' => '/^[\p{Cyrillic}]+$/u',
        'mobile' => '/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/',
        'email' => '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
    ];
    foreach ($data as $attrName => $attrValue) {
        if ($rules[$attrName]) {
            if ($attrValue == '' || !preg_match($rules[$attrName], $attrValue)) {
                sendResponse('error', 'invalid value: ' . $attrName);
            }
        }
    }
    return true;
}

function sendResponse(string $status, $message, $error = '')
{
    $sendData['status'] = $status ? $status : 'empty';
    $sendData['message'] = $message ? $message : 'empty';
    if ($error != '') {
        $sendData['error'] = $error;
    }

    header('Content-Type: application/json');
    echo json_encode($sendData);
    die();
}
