<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>

    <nav class="footer-content__nav">
        <ul class="footer-content__nav-list">

			<?php
			foreach ($arResult as $item) {
				echo '<li class="footer-nav__list-item">
                            <a class="footer-content__nav-item" href=' . $item['LINK'] . '>' . $item["TEXT"] . '</a>
                          </li>';
			}
			?>

        </ul>
    </nav>

<?php endif ?>