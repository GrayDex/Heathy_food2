<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;


foreach ($arResult['ITEMS'] as $key => $arItem) {
    if ($arItem['DETAIL_PICTURE']) {
        $picId = $arResult['ITEMS'][$key]['DETAIL_PICTURE']['ID'];
        $size = ["width" => 1200, "height" => 800];
        $resArr = CFile::ResizeImageGet($picId, $size, BX_RESIZE_IMAGE_EXACT);
        $arResult['ITEMS'][$key]['DETAIL_PICTURE']['RES_PIC_SRC'] = $resArr['src'];
    }
}

if (CModule::IncludeModule('iblock')) {
    $rsSections = CIBlockSection::GetList(
        array('SORT' => 'asc'),
        array('IBLOCK_CODE' => $arResult['CODE'], 'GLOBAL_ACTIVE' => 'Y'));

    $sectionName = [];


    $arResult['SECTION_BY_ID'][] = [
        'ID' => 0,
        'NAME' => 'Все',
        'SECTION_PAGE_URL' => '/catalog/',
        'IS_ACTIVE' => !$_GET['SECTION_CODE'],
    ];

    while ($arSection = $rsSections->GetNext()) {
        if (!isset($arSection['IBLOCK_SECTION_ID'])) { // if parent

            if ($arSection['CODE'] == $_GET['SECTION_CODE']) {
                $arResult['SECTION_BY_ID'][0]['SECTION_PAGE_URL'] = $arSection['SECTION_PAGE_URL'];
                $arResult['SECTION_BY_ID'][0]['IS_ACTIVE'] = true;
            }

        } else { //if child

            if ($arSection['CODE'] == $_GET['SECTION_CODE']) {
                $rsParentSec = CIBlockSection::GetByID($arSection['IBLOCK_SECTION_ID']);
                $arParentSec = $rsParentSec->GetNext();
                $arResult['SECTION_BY_ID'][0]['SECTION_PAGE_URL'] = $arParentSec['SECTION_PAGE_URL'];

            }
            $arResult['SECTION_BY_ID'][] = [
                'ID' => $arSection['ID'],
                'NAME' => $arSection['NAME'],
                'SECTION_PAGE_URL' => $arSection['SECTION_PAGE_URL'],
                'IS_ACTIVE' => $arSection['CODE'] == $_GET['SECTION_CODE'],
            ];
            $sectionName[$arSection['ID']] = $arSection['NAME'];
        }
    }

    foreach ($arResult['ITEMS'] as $key => $arItem) {
        if (isset($arItem['IBLOCK_SECTION_ID']) && isset($sectionName[$arItem['IBLOCK_SECTION_ID']])) {
            $arResult['ITEMS'][$key]['SECTION_NAME'] = $sectionName[$arItem['IBLOCK_SECTION_ID']];
        }
    }

}
