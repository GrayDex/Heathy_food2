<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_before.php';

// spam test before use
if (1) {
    $data = json_decode(file_get_contents('php://input', true));

    // process data and write data into infoBlock


    // response
    //echo json_encode($data);
    echo json_encode([
        'status' => 'good',
        'html'=> '<div class="catalog-detail__form-title">Success!</div>',
    ]);
}

die();
