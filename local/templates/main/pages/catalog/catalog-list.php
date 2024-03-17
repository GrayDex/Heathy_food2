<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die; 

if ($_GET['ajax'] && $_GET['SORT']) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/local/templates/main/include/ajax/catalog/cookie_sort.php');
    die();
}
?>

    <?php $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "nav_catalog_list",
        array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0",
            "COMPONENT_TEMPLATE" => "nav_catalog_list"
        ),
        false
    ); ?>

    <?php
    global $arrFilter;
    $arrFilter = [];

    // sections
    if (isset($arrUrl[2])) {
        $arrFilter['=SECTION_CODE'] = $arrUrl[2];
    }

    //filters
    $filterPropByGetParam = [
        'top' => '=PROPERTY_LOGO_VALUE',
        'brand' => '=PROPERTY_BRAND',
        'fat' => '=PROPERTY_FAT',
    ];

    foreach ($filterPropByGetParam as $getParam => $propName) {
        if ($_GET[$getParam]) {
            $arrFilter[$propName] = $_GET[$getParam];
        }
    }

    $sortList = [
        'SORT1' => ['SORT_BY' => 'ACTIVE_FROM', 'ORDER' => 'DESC'],
        'SORT2' => ['SORT_BY' => 'SORT', 'ORDER' => 'ASC'],
    ];
 
    if ($_COOKIE['sort'] == 'popular') {
        $temp = $sortList['SORT1'];
        $sortList['SORT1'] = $sortList['SORT2'];
        $sortList['SORT2'] = $temp;
    }

    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "catalog_list",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "arrFilter",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "2",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "16",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => $arrUrl[2],
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "WEIGHT",
                1 => "FAT",
                2 => "CNT_BOX",
                3 => "CNT_PALLETE",
                4 => "LOG",
                5 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => $sortList['SORT1']['SORT_BY'],
            "SORT_BY2" => $sortList['SORT2']['SORT_BY'],
            "SORT_ORDER1" => $sortList['SORT1']['ORDER'],
            "SORT_ORDER2" => $sortList['SORT2']['OREDR'],
            "STRICT_SECTION_CHECK" => "N",
            "USER_PARAM" => "Hello",
            "COMPONENT_TEMPLATE" => "catalog_list"
        ),
        false
    ); ?>