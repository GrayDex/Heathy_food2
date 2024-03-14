<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$cookieContent = $_GET['sort'] ? $_GET['sort'] : 'new';
$cookie = new Bitrix\Main\Web\Cookie('sort', $cookieContent, time() + 60 * 60, false);
Bitrix\Main\Application::getInstance()->getContext()->getResponse()->addCookie($cookie);

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php');