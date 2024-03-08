<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die; ?>


<section class="top-section top-section_main">
    <div class="main-slider container desktop-t">
        <div class="main-slider__wrapper">
            <div class="swiper main-swiper">
                <?php $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
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
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
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
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LOGO",
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
		"COMPONENT_TEMPLATE" => "slider",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "2",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
); ?>
                <div class="main-slider__buttons">
                    <div class="slider-btn btn-hover_parent main-slider__button-left">
                        <div class="white-circle">
                            <div class="btn-hover_circle total-white"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                                 fill="none">
                                <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z"
                                      fill="#4F627D"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="slider-btn btn-hover_parent main-slider__button-right">
                        <div class="white-circle right">
                            <div class="btn-hover_circle total-white"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                                 fill="none">
                                <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z"
                                      fill="#4F627D"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="main-slider__pagination"></div>
            </div>
        </div>
    </div>
    <div class="main-slider mobile-mob">
        <div class="main-slider__wrapper">
            <div class="swiper main-swiper-mobile">
                <?php $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_mobile", 
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
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
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
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "[IMG_MOBILE]",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider_mobile"
	),
	false
); ?>
                <div class="main-slider__pagination"></div>
            </div>
        </div>
    </div>
</section>
<section class="main-catalog container" data-aos="fade-up" data-aos-duration="1500">
    <div class="main-catalog__top" data-aos="fade-up" data-aos-duration="1500">
        <h2 class="main-catalog__title animation-title" data-splitting data-effect1>
            <span>каталог</span><span>продукции</span></h2>
        <div class="title-rombs">
            <div class="title-rombs__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                    <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
                          fill="#F64653"></path>
                    <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
                          fill="#F64653"></path>
                    <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
                          fill="#F64653"></path>
                    <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
                          fill="#F64653"></path>
                </svg>
            </div>
            <div class="title-rombs__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                    <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
                          fill="#F64653"></path>
                    <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
                          fill="#F64653"></path>
                    <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
                          fill="#F64653"></path>
                    <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
                          fill="#F64653"></path>
                </svg>
            </div>
        </div>
    </div>

    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"catalog", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "catalog",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_COLOR",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	),
	false
);?>

</section>
<section class="main-traditions container-fluid" data-aos="fade-up" data-aos-duration="1500">
    <div class="main-traditions__bg">
        <svg width="1920" height="1390" viewbox="0 0 1920 1390" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_112_14072)">
                <path d="M852.866 1631.13C893.576 1133.75 1140.32 88.0227 2485.18 0.229725C2579.7 -5.78834 2629.96 107.847 2562.7 175.108L1027.74 1710.42C959.773 1778.75 845.078 1726.35 852.866 1631.13Z"
                      fill="#EAF3FF"></path>
                <path d="M-573.419 1.29304C-76.0432 42.3575 969.683 288.744 1057.48 1633.6C1063.49 1728.12 949.861 1778.39 882.6 1711.13L-652.715 176.171C-721.038 108.202 -668.646 -6.49505 -573.419 1.29304Z"
                      fill="#EAF3FF"></path>
            </g>
            <defs>
                <clippath id="clip0_112_14072">
                    <rect width="1920" height="1390" fill="white"></rect>
                </clippath>
            </defs>
        </svg>
    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1500">
        <?php $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH . '/include/areas/main/tradition_desc.php',
                "EDIT_TEMPLATE" => ""
            ),
            false
        ); ?>
        <div class="main-traditions__video" data-button-fade="main-video">
            <div class="main-traditions__video-bg">
                <svg width="1840" height="700" viewbox="0 0 1840 700" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g style="mix-blend-mode:soft-light" opacity="0.7">
                        <path d="M812.647 942.126C853.357 444.751 1100.1 -600.977 2444.96 -688.77C2539.48 -694.788 2589.74 -581.153 2522.48 -513.892L987.522 1021.42C919.554 1089.75 804.858 1037.35 812.647 942.126Z"
                              fill="black"></path>
                        <path d="M-613.638 -687.707C-116.262 -646.643 929.464 -400.256 1017.26 944.605C1023.27 1039.12 909.641 1089.39 842.381 1022.13L-692.935 -512.829C-761.257 -580.798 -708.865 -695.495 -613.638 -687.707Z"
                              fill="black"></path>
                    </g>
                </svg>
            </div>
            <div class="main-traditions__video-video">
                <video src="<?= SITE_TEMPLATE_PATH ?>/assets/videos/zp_preview.mp4" loop muted playsinline autoplay
                       preload="none"></video>
            </div>
            <div class="main-traditions__video-button">
                <svg width="576" height="202" viewbox="0 0 576 202" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36.408 72.16C26.568 72.16 18.04 68.9347 10.824 62.484C3.608 56.0333 0 47.1773 0 35.916C0 25.2013 3.49866 16.564 10.496 10.004C17.6027 3.33467 26.404 0 36.9 0C47.5053 0 56.3067 3.06134 63.304 9.18401L53.628 23.288C49.5827 19.8987 44.8813 18.204 39.524 18.204C34.604 18.204 30.504 19.844 27.224 23.124C23.944 26.2947 22.304 30.6133 22.304 36.08C22.304 41.5467 23.8893 45.8653 27.06 49.036C30.34 52.0973 34.3307 53.628 39.032 53.628C44.8267 53.628 49.9653 51.6053 54.448 47.56L65.272 61.008C60.8987 65.0533 56.5253 67.9507 52.152 69.7C47.888 71.34 42.64 72.16 36.408 72.16Z"
                          fill="white"></path>
                    <path d="M148.792 1.968L154.368 69.864H129.112L127.964 49.856C127.854 49.2 127.745 48.1067 127.636 46.576C127.636 45.0453 127.636 43.8973 127.636 43.132C125.777 45.6467 123.973 47.9427 122.224 50.02L114.352 58.876H109.104L101.396 49.856C100.958 49.3093 100.138 48.3253 98.9356 46.904C97.7329 45.3733 96.8036 44.1707 96.1476 43.296L95.6556 49.692L94.1796 69.864H69.0876L75.4836 1.968H84.5036L105.004 24.436C107.081 26.732 109.322 29.3013 111.728 32.144C113.149 30.3947 115.39 27.88 118.452 24.6L139.772 1.968H148.792Z"
                          fill="white"></path>
                    <path d="M195.888 72.16C184.736 72.16 175.606 68.8253 168.5 62.156C161.502 55.3773 158.004 46.6853 158.004 36.08C158.004 25.4747 161.502 16.8373 168.5 10.168C175.606 3.38934 184.736 0 195.888 0C206.93 0 216.005 3.38934 223.112 10.168C230.218 16.8373 233.772 25.4747 233.772 36.08C233.772 46.6853 230.218 55.3773 223.112 62.156C216.005 68.8253 206.93 72.16 195.888 72.16Z"
                          fill="white"></path>
                    <path d="M252.273 69.864V20.5H234.069V2.132H292.945V20.5H274.577V69.864H252.273Z"
                          fill="white"></path>
                    <path d="M341.771 0.328003C351.064 0.328003 358.718 3.66267 364.731 10.332C370.744 17.0013 373.751 25.3653 373.751 35.424C373.751 46.248 370.799 55.0493 364.895 61.828C358.991 68.4973 351.338 71.832 341.935 71.832C333.407 71.832 326.355 69.044 320.779 63.468C321.107 68.8253 321.271 74.456 321.271 80.36V105.944H299.295V2.132H313.563L317.827 12.464C323.84 4.37333 331.822 0.328003 341.771 0.328003ZM336.359 53.464C340.842 53.464 344.45 51.8787 347.183 48.708C350.026 45.5373 351.447 41.3827 351.447 36.244C351.447 30.8867 350.08 26.6227 347.347 23.452C344.614 20.2813 340.951 18.696 336.359 18.696C331.548 18.696 327.667 20.2267 324.715 23.288C321.872 26.3493 320.451 30.504 320.451 35.752C320.451 41.1093 321.872 45.428 324.715 48.708C327.667 51.8787 331.548 53.464 336.359 53.464Z"
                          fill="white"></path>
                    <path d="M414.917 0C424.539 0 432.137 3.00667 437.713 9.02C443.399 15.0333 446.241 23.2333 446.241 33.62C446.241 36.9 446.023 39.9067 445.585 42.64H400.321C402.727 51.2773 409.177 55.596 419.673 55.596C426.561 55.596 432.028 53.8467 436.073 50.348L443.617 64.124C435.417 69.4813 426.452 72.16 416.721 72.16C405.351 72.16 396.167 68.8253 389.169 62.156C382.172 55.4867 378.673 46.7947 378.673 36.08C378.673 25.6933 382.063 17.1107 388.841 10.332C395.729 3.444 404.421 0 414.917 0ZM423.117 19.68C420.821 17.384 417.869 16.236 414.261 16.236C410.653 16.236 407.537 17.4387 404.913 19.844C402.399 22.14 400.759 25.4747 399.993 29.848H426.725C426.616 25.3653 425.413 21.976 423.117 19.68Z"
                          fill="white"></path>
                    <path d="M465.576 69.864V20.5H447.372V2.132H506.248V20.5H487.88V69.864H465.576Z"
                          fill="white"></path>
                    <path d="M550.481 22.304C558.244 22.304 564.421 24.4907 569.013 28.864C573.605 33.128 575.901 38.868 575.901 46.084C575.901 53.5187 573.605 59.368 569.013 63.632C564.421 67.7867 558.244 69.864 550.481 69.864H512.597V2.132H534.901V22.304H550.481ZM544.085 54.94C547.365 54.94 549.935 54.1747 551.793 52.644C553.652 51.004 554.581 48.8173 554.581 46.084C554.581 40.18 551.083 37.228 544.085 37.228H534.901V54.94H544.085Z"
                          fill="white"></path>
                    <path d="M153.145 150.096C160.361 152.939 163.969 158.241 163.969 166.004C163.969 171.908 161.946 176.555 157.901 179.944C153.855 183.224 148.334 184.864 141.337 184.864H101.813V117.132H139.041C145.71 117.132 151.013 118.772 154.949 122.052C158.994 125.332 161.017 129.76 161.017 135.336C161.017 142.005 158.393 146.925 153.145 150.096ZM132.645 130.908H122.969V144.684H132.645C137.893 144.684 140.517 142.333 140.517 137.632C140.517 133.149 137.893 130.908 132.645 130.908ZM134.121 171.088C139.587 171.088 142.321 168.737 142.321 164.036C142.321 159.335 139.587 156.984 134.121 156.984H122.969V171.088H134.121Z"
                          fill="white"></path>
                    <path d="M227.586 116.968H235.622V184.864H214.302V159.936C214.302 156.437 214.357 153.813 214.466 152.064C213.373 153.376 211.569 155.289 209.055 157.804L180.682 185.028H172.646V117.132H193.966V141.404C193.966 144.684 193.912 147.144 193.802 148.784C195.114 147.253 197.192 145.176 200.034 142.552L227.586 116.968Z"
                          fill="white"></path>
                    <path d="M312.234 167.644H322.238V201.92H302.722V184.864H261.394V201.92H241.878V167.644H250.734C253.467 163.052 255.162 156.765 255.818 148.784L258.606 117.132H312.234V167.644ZM277.302 133.696L275.498 152.064C274.842 158.952 273.639 164.255 271.89 167.972H292.062V133.696H277.302Z"
                          fill="white"></path>
                    <path d="M360.865 115C370.486 115 378.085 118.007 383.661 124.02C389.346 130.033 392.189 138.233 392.189 148.62C392.189 151.9 391.97 154.907 391.533 157.64H346.269C348.674 166.277 355.125 170.596 365.621 170.596C372.509 170.596 377.975 168.847 382.021 165.348L389.565 179.124C381.365 184.481 372.399 187.16 362.669 187.16C351.298 187.16 342.114 183.825 335.117 177.156C328.119 170.487 324.621 161.795 324.621 151.08C324.621 140.693 328.01 132.111 334.789 125.332C341.677 118.444 350.369 115 360.865 115ZM369.065 134.68C366.769 132.384 363.817 131.236 360.209 131.236C356.601 131.236 353.485 132.439 350.861 134.844C348.346 137.14 346.706 140.475 345.941 144.848H372.673C372.563 140.365 371.361 136.976 369.065 134.68Z"
                          fill="white"></path>
                    <path d="M434.3 187.16C423.148 187.16 414.018 183.825 406.912 177.156C399.914 170.377 396.416 161.685 396.416 151.08C396.416 140.475 399.914 131.837 406.912 125.168C414.018 118.389 423.148 115 434.3 115C445.342 115 454.417 118.389 461.524 125.168C468.63 131.837 472.184 140.475 472.184 151.08C472.184 161.685 468.63 170.377 461.524 177.156C454.417 183.825 445.342 187.16 434.3 187.16ZM422.984 163.872C425.826 167.043 429.598 168.628 434.3 168.628C439.001 168.628 442.773 167.043 445.616 163.872C448.458 160.592 449.88 156.328 449.88 151.08C449.88 145.832 448.458 141.623 445.616 138.452C442.773 135.172 439.001 133.532 434.3 133.532C429.598 133.532 425.826 135.172 422.984 138.452C420.141 141.623 418.72 145.832 418.72 151.08C418.72 156.328 420.141 160.592 422.984 163.872Z"
                          fill="white"></path>
                    <path d="M186 34.4569L186 29.6989C186 24.5643 191.893 21.6638 195.962 24.7959L204.335 31.2413C207.552 33.7182 207.552 38.5705 204.335 41.0473L195.962 47.4928C191.893 50.6249 186 47.7244 186 42.5898L186 37.8319L186 34.4569Z"
                          fill="#0068FF"></path>
                </svg>
            </div>
        </div>
    </div>
</section>
<section class="main-filials container" data-aos="fade-up" data-aos-duration="1500">
    <div class="main-filials__landscape" data-aos="fade-up" data-aos-duration="1500">
        <div class="main-filials__landscape-bg desktop">
            <picture class="picture">
                <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg.webp">
                <img class="picture__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg.png">
            </picture>
        </div>
        <div class="main-filials__landscape-bg devices">
            <picture class="picture">
                <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-device.webp">
                <img class="picture__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-device.png">
            </picture>
        </div>
        <div class="main-filials__landscape-bg mobile-mob">
            <picture class="picture">
                <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-mobile.webp">
                <img class="picture__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-mobile.png">
            </picture>
        </div>
        <div class="main-filials__landscape-top">
            <div class="title-rombs">
                <div class="title-rombs__item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
                              fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
                              fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
                              fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
                              fill="#F64653"></path>
                    </svg>
                </div>
                <div class="title-rombs__item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
                              fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
                              fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
                              fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
                              fill="#F64653"></path>
                    </svg>
                </div>
            </div>
        </div>
        <h2 class="main-filials__landscape-title animation-title" data-splitting data-effect1>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH . '/include/areas/main/invite.php',
                    "EDIT_TEMPLATE" => ""
                ),
                false
            ); ?>
        </h2>
        <div class="main-filials__landscape-content">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH . '/include/areas/main/invite_desc.php',
                    "EDIT_TEMPLATE" => ""
                ),
                false
            ); ?>
            <div class="main-filials__landscape-desk">Присоединяйтесь к нам!</div>
            <a class="main-filials__landscape-button btn-hover_parent" href="#">
                <div class="btn-hover_circle white"></div>
                <p>Подробнее о сотрудничестве</p>
            </a>
        </div>
    </div>
    <div class="main-filials__bottom" data-aos="fade-up" data-aos-duration="1500"><a
                class="main-filials__card where-buy btn-hover_parent" href="#">
            <div class="main-filials__card-top">
                <div class="main-filials__card-title">где купить</div>
                <div class="main-filials__card-text">Локальные, федеральные сети и&nbsp;маркетплейсы</div>
            </div>
            <div class="main-filials__card-bot">
                <div class="main-filials__card-row">
                    <div class="main-filials__card-icons">
                        <picture class="picture">
                            <source type="image/webp"
                                    srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons1.webp">
                            <img class="picture__img"
                                 src="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons1.png">
                        </picture>
                    </div>
                    <div class="button button-arrow_right btn-hover_parent">
                        <div class="btn-hover_circle total-white"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z"
                                  fill="#0068FF"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </a><a class="main-filials__card game btn-hover_parent" href="#" target="blank">
            <div class="main-filials__card-bg">
                <picture class="picture">
                    <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-game.webp">
                    <img class="picture__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-game.png">
                </picture>
            </div>
            <div class="main-filials__card-top">
                <div class="main-filials__card-title">мобильная игра</div>
                <div class="main-filials__card-text">Сёмыч и Ладушка спасают Снежландию</div>
            </div>
            <div class="main-filials__card-bot">
                <div class="main-filials__card-row">
                    <div class="main-filials__card-icons short">
                        <picture class="picture">
                            <source type="image/webp"
                                    srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons2.webp">
                            <img class="picture__img"
                                 src="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons2.png">
                        </picture>
                    </div>
                    <div class="button button-arrow_right btn-hover_parent">
                        <div class="btn-hover_circle total-white"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z"
                                  fill="#0068FF"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </a></div>
</section>
<section class="main-news" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="main-news__top">
            <div class="main-news__title animation-title" data-splitting data-effect1>
                <span>новости </span><span>и </span><span>акции</span></div>
            <div class="title-rombs">
                <div class="title-rombs__item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
                              fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
                              fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
                              fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
                              fill="#F64653"></path>
                    </svg>
                </div>
                <div class="title-rombs__item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
                              fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
                              fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
                              fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
                              fill="#F64653"></path>
                    </svg>
                </div>
            </div>
        </div>

                        <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_news", 
	array(
		"ACTIVE_DATE_FORMAT" => "j M Y",
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
		"COMPONENT_TEMPLATE" => "slider_news",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DATE_ACTIVE_FROM",
			3 => "IBLOCK_NAME",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Ново",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
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
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager"
	),
	false
); ?>


    </div>
</section>
<div class="popup-video" data-popup-fade="main-video">
    <div class="popup-video__close" data-fade-close="main-video">
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
    <div class="popup-video__inner">
        <div class="popup-video__video">
            <video class="zp-video" controls="controls" width="100%" height="100%"
                   poster="./assets/images/about-production-popup-icecream.png" preload="none">
                <source src="<?= SITE_TEMPLATE_PATH ?>/./assets/videos/video-zdor-product.mp4">
            </video>
        </div>
    </div>
</div>
<div class="overlay"></div>
