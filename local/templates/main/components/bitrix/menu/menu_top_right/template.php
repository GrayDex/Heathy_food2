<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>

    <nav class="header-nav">

		<?php
		foreach ($arResult as $item) {
			echo '<a class="header-nav__item" href=' . $item['LINK'] . '>' . $item["TEXT"] . '</a>';
		}
		?>

    </nav>

<?php endif ?>