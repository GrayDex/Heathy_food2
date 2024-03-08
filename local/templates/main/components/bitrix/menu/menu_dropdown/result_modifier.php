<?php
$menu_cols = [];
$menu_rows = ceil(count($arResult) / 2);
foreach ($arResult as $item => $name) {
	if ($item < $menu_rows) {
        $menu_cols[0][] = $name;
	} else {
		$menu_cols[1][] = $name;
	}
}
$arResult=$menu_cols;