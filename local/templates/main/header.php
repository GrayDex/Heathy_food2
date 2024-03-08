<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die; ?>

<!doctype html>
<html lang=<?=LANGUAGE_ID?>>

<head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH."/include/templ/assets.php"); ?>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>

<body class="body">
    <div><?php $APPLICATION->ShowPanel() ?></div>
        <div class="wrapper">
            <?php require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH."/include/templ/header.php"); ?>
                <?php require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH."/include/templ/main.php"); ?>
