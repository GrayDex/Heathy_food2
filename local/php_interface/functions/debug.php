<?php


if (!function_exists('dd') and !function_exists('clean_keys')) {
	function dd($var, bool $dump = false, bool $clean_tilde_keys = true)
	{
		global $APPLICATION;

		$APPLICATION->RestartBuffer();
		if ($clean_tilde_keys and is_array($var)) {
			$var = clean_keys($var);
		}
		echo '<pre style="background-color: #e5ece7">';
		if ($dump) {
			var_dump($var);
		} else {
			print_r($var);
		}
		echo '</pre>';
		die();
	}

	function clean_keys($arr, $pattern = "/~/", $depth = 100)
	{
		if (is_array($arr)) {
			$keys = array_keys($arr);
			$tilde_keys = preg_grep($pattern, $keys);
			foreach ($tilde_keys as $tilde_key) {
				unset($arr[$tilde_key]);
			}
			$depth -= 1;
			foreach ($arr as $key => $item) {
				if (is_array($item) and $depth > 1) {
					$arr[$key] = clean_keys($item, "/~/", $depth);
				}
			}
		}
		return $arr;
	}
}

