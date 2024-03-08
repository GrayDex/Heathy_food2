<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

foreach ($arResult['ITEMS'] as $key => $arItem) {
	$img_id = $arItem['PREVIEW_PICTURE']['ID'];
	$resized_image = CFile::ResizeImageGet($img_id, ['width' => 1840, 'height' => 760], BX_RESIZE_IMAGE_EXACT);
    $arResult['ITEMS'][$key]['SRC_IMG'] = $resized_image['src'];
}

