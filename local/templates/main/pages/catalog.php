<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

$strUrl = explode('/', $APPLICATION->GetCurDir());
$arrUrl = array_filter($strUrl, function ($elem) {
    return $elem != '';
});
$GET_SECT_CODE = $arrUrl[2];
$GET_ELEM_CODE = $arrUrl[3];

if (!isset($GET_SECT_CODE)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog/catalog-main.php";
}

if (isset($GET_SECT_CODE) && !isset($GET_ELEM_CODE)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog/catalog-list.php";
}

if (isset($GET_ELEM_CODE)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog/catalog-detail.php";
}
