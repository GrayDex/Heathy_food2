<?php

if ($arResult['DETAIL_PICTURE'])
{
    $picId = $arResult['DETAIL_PICTURE']['ID'];
    $size = ["width" => 1200, "height" => 800];
    $resArr = CFile::ResizeImageGet($picId, $size, BX_RESIZE_IMAGE_EXACT);
    $arResult['DETAIL_PICTURE']['RES_PIC_SRC'] = $resArr['src'];
}
