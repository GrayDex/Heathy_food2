<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

// resize images
foreach ($arResult['ITEMS'] as $key => $arItem) {
    if ($arItem['PREVIEW_PICTURE']) {
        $picId = $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['ID'];
        $size = ["width" => 1200, "height" => 800];
        $resArr = CFile::ResizeImageGet($picId, $size, BX_RESIZE_IMAGE_EXACT);
        $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['RES_PIC_SRC'] = $resArr['src'];
    }
}

// setup list of sections to show
if (CModule::IncludeModule('iblock')) {

    $arResult['PARENT_SECTION'] = $arResult['SECTION']['PATH'][0];
    $arResult['SECTIONS'][] = [
        'ID' => 0,
        'NAME' => 'Все',
        'SECTION_PAGE_URL' => $arResult['PARENT_SECTION']['SECTION_PAGE_URL'], // get parent section
        'IS_ACTIVE' => count($arResult['SECTION']['PATH']) == 1, // if path contains only one section, then parent was called
    ];
    //dd($arResult['PARENT_SECTION']);
    $rsSections = CIBlockSection::GetList(arFilter: [
        'SECTION_ID' => $arResult['PARENT_SECTION']['ID'],
        'GLOBAL_ACTIVE' => 'Y',
        'DEPTH_LEVEL' => 2,
    ]);

    while ($arSection = $rsSections->GetNext()) {

        $arResult['SECTIONS'][] = [
            'ID' => $arSection['ID'],
            'NAME' => $arSection['NAME'],
            'SECTION_PAGE_URL' => $arSection['SECTION_PAGE_URL'],
            'IS_ACTIVE' => $arSection['CODE'] == $_GET['SECTION_CODE'],
        ];
        $sectNamebyID[$arSection['ID']] = $arSection['NAME'];
    }

    // setup name of sections
    foreach ($arResult['ITEMS'] as $key => $arItem) {
        if (isset($arItem['IBLOCK_SECTION_ID']) && isset($sectNamebyID[$arItem['IBLOCK_SECTION_ID']])) {
            $arResult['ITEMS'][$key]['SECTION_NAME'] = $sectNamebyID[$arItem['IBLOCK_SECTION_ID']];
        }
    }
}
