<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['sort'])) {
    $cookieContent = $data['sort'];
    $cookie = new Bitrix\Main\Web\Cookie('sort', $cookieContent, time()+60*60, false);
    Bitrix\Main\Application::getInstance()->getContext()->getResponse()->addCookie($cookie);
    Bitrix\Main\Application::getInstance()->getContext()->getResponse()->flush('');
}

die();
