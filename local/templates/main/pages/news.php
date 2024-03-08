<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die; ?>

<?php if (empty($_GET['ELEMENT_CODE'])): ?>
	<section class="top-section">
		<section class="news-content container">

			<!-- breadcrumbs -->
			<?php $APPLICATION->IncludeComponent(
				"bitrix:breadcrumb",
				"news_bcrumbs",
				array(
					"PATH" => "/",
					"SITE_ID" => "s1",
					"START_FROM" => "0",
					"COMPONENT_TEMPLATE" => "news_bcrumbs"
				),
				false
			); ?>
			<!-- end of breadcrumbs -->

			<!-- news list -->
			<?php $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => $_GET["SECTION_CODE"],
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news",
		"USER_PARAM" => "Hello"
	),
	false
); ?>
			<!-- end of news list -->

		</section>
	</section>
<?php else: ?>

	<section class="top-section container">

		<!-- breadcrumbs -->
		<?php $APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"news_bcrumbs",
			array(
				"PATH" => "/",
				"SITE_ID" => "s1",
				"START_FROM" => "0",
				"COMPONENT_TEMPLATE" => "news_bcrumbs"
			),
			false
		); ?>
		<!-- end of breadcrumbs -->

		<!-- news detail -->
		<?php $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"detail_new", 
	array(
		"ACTIVE_DATE_FORMAT" => "j M Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "detail_new",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => $_GET["ELEMENT_CODE"],
		"ELEMENT_ID" => "",
		"FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "IBLOCK_TYPE_ID",
			3 => "",
		),
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	),
	false
); ?>
		<!-- end of news detail -->
	</section>

<?php endif; ?>

<div class="container">
	<section class="section-mailing news-content__mailing" data-aos="fade-up">
		<div class="section-mailing__bg desktop">
			<picture class="picture">
				<source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg.webp">
				<img class="picture__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg.png">
			</picture>
		</div>
		<div class="section-mailing__bg device-bg">
			<picture class="picture">
				<source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-device.webp">
				<img class="picture__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-device.png">
			</picture>
		</div>
		<div class="section-mailing__bg mobile-bg">
			<picture class="picture">
				<source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-mobile.webp">
				<img class="picture__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-mobile.png">
			</picture>
		</div>
		<div class="section-mailing__content">
			<div class="section-mailing__title">подпишитесь на нас, чтобы быть в&nbsp;курсе</div>
			<form class="section-mailing__form" data-parsley-validate="">
				<div class="section-mailing__form-container">
					<div class="input-wrapper" data-input-parent="">
						<div class="input-wrapper__placeholder">E-mail</div>
						<input class="input" data-input="" required type="email" placeholder="E-mail">
					</div>
				</div>
				<button class="section-mailing__form-button btn-hover_parent" type="submit">
					<div class="btn-hover_circle"></div>
					<span>Подписаться</span>
				</button>
			</form>
			<div class="section-mailing__policy">Нажимая на кнопку «Отправить», вы даете согласие с&nbsp;<a href="#">политикой
					в&nbsp;отношении обработки персональных данных</a></div>
		</div>
	</section>
</div>
<div class="popup popup-subscribe" data-popup-wrapper="subscribe-complete" data-overlay-on data-popup-fade>
	<div class="popup-subscribe__close" data-popup-close="subscribe-complete">
		<div class="btn-hover_parent">
			<div class="btn-hover_circle white"></div>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
				<path d="M6.69678 6.69671L17.3034 17.3033" stroke="#0068FF" stroke-width="2" stroke-linecap="round"
				      stroke-linejoin="round"></path>
				<path d="M6.69662 17.3033L17.3032 6.69671" stroke="#0068FF" stroke-width="2" stroke-linecap="round"
				      stroke-linejoin="round"></path>
			</svg>
		</div>
	</div>
	<div class="popup-subscribe__inner">
		<div class="popup-subscribe__send-logo">
			<svg width="100" height="99" viewbox="0 0 100 99" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
				      d="M35.2969 11.3709C39.5183 -3.42101 60.4814 -3.42101 64.7028 11.3709C66.0509 16.0947 70.9041 18.8967 75.669 17.7023C90.5899 13.9622 101.071 32.1167 90.372 43.1685C86.9551 46.6979 86.9551 52.3018 90.372 55.8312C101.071 66.883 90.5899 85.0376 75.669 81.2975C70.9041 80.1031 66.0509 82.905 64.7028 87.6288C60.4814 102.421 39.5183 102.421 35.2969 87.6288C33.9488 82.905 29.0957 80.1031 24.3307 81.2975C9.40981 85.0376 -1.07173 66.883 9.62775 55.8312C13.0446 52.3018 13.0446 46.6979 9.62776 43.1685C-1.07173 32.1167 9.40981 13.9622 24.3307 17.7023C29.0957 18.8967 33.9488 16.0947 35.2969 11.3709ZM68.8767 39.1055C69.9705 37.7929 69.7932 35.8421 68.4806 34.7482C67.168 33.6544 65.2172 33.8317 64.1233 35.1443L49.8361 52.2889C48.3066 54.1244 47.3674 55.2399 46.5936 55.9386C46.2347 56.2626 46.0219 56.3918 45.9198 56.4411C45.8991 56.4512 45.8843 56.4572 45.875 56.4607C45.8657 56.4572 45.8509 56.4512 45.8302 56.4411C45.7281 56.3918 45.5153 56.2626 45.1564 55.9386C44.3827 55.2399 43.4434 54.1244 41.9139 52.2889L35.8767 45.0443C34.7828 43.7317 32.832 43.5544 31.5194 44.6482C30.2068 45.7421 30.0295 47.6929 31.1233 49.0055L37.2922 56.4082C38.6472 58.0345 39.8686 59.5006 41.0096 60.5308C42.251 61.6518 43.8146 62.6502 45.875 62.6502C47.9354 62.6502 49.499 61.6518 50.7404 60.5308C51.8814 59.5006 53.1028 58.0345 54.4577 56.4082L68.8767 39.1055Z"
				      fill="#00FFE0"></path>
			</svg>
		</div>
		<div class="popup-subscribe__text">Подписка успешно оформлена</div>
		<div class="popup-subscribe__button btn-hover_parent" data-popup-close="subscribe-complete">
			<div class="btn-hover_circle"></div>
			<span>Закрыть</span>
		</div>
	</div>
</div>
<div class="overlay"></div>
