<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

foreach ($arResult['PROPERTIES']['GALLERY_FILES']['VALUE'] as $imageID) {

    $targetImageSize = ['height' => 1248, 'weight' => 1248];
    $arResult['PROPERTIES']['GALLERY_FILES']['RES_IMAGE_SRC'][] = CFile::ResizeImageGet(
        $imageID,
        $targetImageSize,
        BX_RESIZE_IMAGE_EXACT,
    )['src'];
}

// brand name
$rsElemList = CIBlockElement::GetList(arFilter: [
    'ID' => [$arResult['PROPERTIES']['BRAND']['VALUE'],
             $arResult['PROPERTIES']['NEXT_ITEM']['VALUE']],
]);

while ($arElem = $rsElemList->GetNext()) {
    // "brand" element
    if ($arElem['ID'] == $arResult['PROPERTIES']['BRAND']['VALUE']) {

        $arResult['PROPERTIES']['BRAND']['NAME'] = $arElem['NAME'];
    }
    // "next item" element
    if ($arElem['ID'] == $arResult['PROPERTIES']['NEXT_ITEM']['VALUE']) {
        
        $arResult['PROPERTIES']['NEXT_ITEM']['ITEM_NAME'] = $arElem['NAME'];
        $arResult['PROPERTIES']['NEXT_ITEM']['ITEM_URL'] = $arElem['DETAIL_PAGE_URL'];

        $image = CFile::GetByID($arElem['PREVIEW_PICTURE'])->arResult[0]['SRC'];
        $imageTargetSize = ['height' => 620, 'weight' => 620];
        $arResult['PROPERTIES']['NEXT_ITEM']['ITEM_PICTURE'] = CFile::ResizeImageGet(
            $imageID,
            $targetImageSize,
            BX_RESIZE_IMAGE_EXACT,
        )['src'];

    }
}

// src file.pdf
$arFile = CFile::GetByID($arResult['PROPERTIES']['RECOMEND_FILE']['VALUE']);
$arResult['PROPERTIES']['RECOMEND_FILE']['SRC'] = $arFile->arResult[0]['SRC'];

// store condition: name=>description
foreach ($arResult['PROPERTIES']['CONDITION_STOR']['VALUE'] as $key => $name) {
    $arResult['PROPERTIES']['CONDITION_STOR']['PROPS'][$name] = $arResult['PROPERTIES']['CONDITION_STOR']['DESCRIPTION'][$key];
}

// energy props: name=>description
foreach ($arResult['PROPERTIES']['ENERGY_PROP']['VALUE'] as $key => $name) {
    $arResult['PROPERTIES']['ENERGY_PROP']['PROPS'][$name] = $arResult['PROPERTIES']['ENERGY_PROP']['DESCRIPTION'][$key];
}
