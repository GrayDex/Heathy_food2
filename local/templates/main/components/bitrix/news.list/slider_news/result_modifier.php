<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;


if (CModule::IncludeModule('iblock')) {
    $sectIdList = [];

    foreach ($arResult['ITEMS'] as $arItem) {
        if (!empty($arItem['IBLOCK_SECTION_ID'] and ! in_array($arItem['IBLOCK_SECTION_ID'], $sectIdList))) {
            $sectIdList[] = $arItem['IBLOCK_SECTION_ID'];
        }
    }

    $rsSections = CIBlockSection::GetList(array(), array('ID' => $sectIdList));

    $sectNameById = [];
    while ($arSection = $rsSections->GetNext()) {
        $sectNameById[$arSection['ID']] = $arSection['NAME'];
    }

	foreach ($arResult['ITEMS'] as $key => $arItem) {
		$arResult['ITEMS'][$key]['SECT_NAME'] = $sectNameById[$arItem['IBLOCK_SECTION_ID']];
	}
}



