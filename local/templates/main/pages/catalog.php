<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

$path = $APPLICATION->GetCurDir();

$arrPath = explode('/', $path);
$arrPath = array_filter($arrPath, function ($elem) {
    return $elem != '';
});

if (isset($arrPath[2])) {
    $_GET['SECTION_CODE'] = $arrPath[2];
}
if (isset($arrPath[3])) {
    $_GET['CODE'] = $arrPath[3];
}


if (!isset($_GET['SECTION_CODE'])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog-main.php";
}

if (isset($_GET['SECTION_CODE']) && !isset($_GET['CODE'])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog-list.php";
}

if (isset($_GET['CODE'])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog-detail.php";
}
