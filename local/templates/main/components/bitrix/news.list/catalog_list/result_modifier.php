<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

// resize images
foreach ($arResult['ITEMS'] as $key => $arItem) {
    if ($arItem['PREVIEW_PICTURE']) {
        $picId = $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['ID'];
        $size = ["width" => 310, "height" => 310];
        $resArr = CFile::ResizeImageGet($picId, $size, BX_RESIZE_IMAGE_PROPORTIONAL);
        $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['RES_PIC_SRC'] = $resArr['src'];
    }
}

// setup list of sections to show
$arResult['PARENT_SECTION'] = $arResult['SECTION']['PATH'][0];

$arResult['SECTIONS'][] = [
    'ID' => 0,
    'NAME' => 'Все',
    'SECTION_PAGE_URL' => $arResult['PARENT_SECTION']['SECTION_PAGE_URL'], // get parent section
    'IS_ACTIVE' => $arResult['PARENT_SECTION']['CODE'] == $arParams['PARENT_SECTION_CODE']
];

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
        'IS_ACTIVE' => $arSection['CODE'] == $arParams['PARENT_SECTION_CODE'],
    ];
    $sectNamebyID[$arSection['ID']] = $arSection['NAME'];
}

// setup name of sections
foreach ($arResult['ITEMS'] as $key => $arItem) {
    if (isset($arItem['IBLOCK_SECTION_ID']) && isset($sectNamebyID[$arItem['IBLOCK_SECTION_ID']])) {
        $arResult['ITEMS'][$key]['SECTION_NAME'] = $sectNamebyID[$arItem['IBLOCK_SECTION_ID']];
    }
}

// setup array of package props
$packPropNames = ['WEIGHT', 'CNT_BOX', 'CNT_PALLETE'];
foreach ($arResult['ITEMS'] as $key => $arItem) {
    foreach ($packPropNames as $propName) {
        if ($arItem['PROPERTIES'][$propName]['VALUE']) { // if value not null then fill array

            $arResult['ITEMS'][$key]['PROPERTIES']['PACK_PROPS'][$propName]['VALUE'] = $arItem['PROPERTIES'][$propName]['VALUE'];
            if ($arItem['PROPERTIES'][$propName]['CODE']) {
                $arResult['ITEMS'][$key]['PROPERTIES']['PACK_PROPS'][$propName]['CODE'] = $arItem['PROPERTIES'][$propName]['CODE'];
            }
            if ($arItem['PROPERTIES'][$propName]['DESCRIPTION']) {
                $arResult['ITEMS'][$key]['PROPERTIES']['PACK_PROPS'][$propName]['DESCR'] = $arItem['PROPERTIES'][$propName]['DESCRIPTION'];
            }
        }
    }
}
