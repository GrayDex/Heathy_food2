<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>

    <div class="header-main__navigation">
        <div class="header-main__navigation-col">
            <nav class="header-main__navigation-nav">

				<?php
				$bClosed = false;
				foreach ($arResult as $menu_cols) {
					foreach ($menu_cols as $menu_row) {
						echo '<a class="header-main__navigation-link" href="#">' . $menu_row['TEXT'] . '</a>';
					}
					if (!$bClosed) {
						$bClosed = true;
						echo '</div>
                            <div class="header-main__navigation-col">
                        <nav class="header-main__navigation-nav">';
					}
				} ?>

            </nav>
        </div>
    </div>

<?php endif ?>