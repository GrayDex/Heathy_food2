<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

foreach ($arResult['ITEMS'] as $key => $arItem) {
	$img_id = $arItem['PROPERTIES']['IMG_MOBILE']['VALUE'];
	$resized_image = CFile::ResizeImageGet($img_id, ['width' => 670, 'height' => 1000], BX_RESIZE_IMAGE_EXACT);
	$arResult['ITEMS'][$key]['SRC_IMG'] = $resized_image['src'];
}

