<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

$strUrl = explode('/', $APPLICATION->GetCurDir());
$arrUrl = array_filter($strUrl, function ($elem) {
    return $elem != '';
});

if (!isset($arrUrl[2])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog/catalog-main.php";
}

if (isset($arrUrl[2]) && !isset($arrUrl[3])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog/catalog-list.php";
}

if (isset($arrUrl[3])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog/catalog-detail.php";
}
