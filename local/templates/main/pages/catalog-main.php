<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

?>

<section class="main-catalog container top-section" data-aos="fade-up" data-aos-duration="1500">


    <?php $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav_catalog_list", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "nav_catalog_list"
	),
	false
); ?>





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
		"SECTION_CODE" => $_GET["SECTION_CODE"],
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"SECTION_ID" => "",
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

