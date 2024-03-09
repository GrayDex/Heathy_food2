<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

if (!isset($_GET['SECTION_CODE'])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog-main.php";
}

if (isset($_GET['SECTION_CODE']) && !isset($_GET['CODE'])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog-list.php";
}

if (isset($_GET['SECTION_CODE']) && isset($_GET['CODE'])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/pages/catalog-detail.php";
}