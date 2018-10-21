<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
#$APPLICATION->SetTitle("Сход-развал 3D");
$APPLICATION->SetTitle("Услуги");
$APPLICATION->SetPageProperty("TITLE", "Сход-развал 3D");
$APPLICATION->AddChainItem("Сход-развал 3D");
?>

<div class="back-image col s12">
    <div class="overlay">
        <div class="container padd">
            <div class="detailed z-depth-2">
                <div class="name-service valign-wrapper">
                    <img
                        src="<?=SITE_TEMPLATE_PATH?>/img/service/alignment.jpg"
                        alt="СХОД-РАЗВАЛ 3D"
                        class="hide-on-small-only"
                        title="СХОД-РАЗВАЛ 3D"
                    />
                    <h2>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "COMPOSITE_FRAME_MODE" => "A",
                                "COMPOSITE_FRAME_TYPE" => "AUTO",
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/include/page_skhod-razval-3d/title.php",
                                "EDIT_TEMPLATE" => "standard.php"
                            ),
                            false
                        );?>
                    </h2>
                </div>
                    <div class="row description-service">
                        <div class="col s12 l6">
                            <div class="image-service" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/alignment.jpg);"></div>
                        </div>
                        <div class="col s12 l6">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "COMPOSITE_FRAME_MODE" => "A",
                                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/include/page_skhod-razval-3d/text.php",
                                    "EDIT_TEMPLATE" => "standard.php"
                                ),
                                false
                            );?>
                            <p class="h4">
                                <strong>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        ".default",
                                        array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "COMPOSITE_FRAME_MODE" => "A",
                                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_TEMPLATE_PATH."/include/page_skhod-razval-3d/slogan.php",
                                            "EDIT_TEMPLATE" => "standard.php"
                                        ),
                                        false
                                    );?>
                                </strong>
                            </p>
                        </div>
                        <div class="col s12">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "COMPOSITE_FRAME_MODE" => "A",
                                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/include/page_skhod-razval-3d/dop_text.php",
                                    "EDIT_TEMPLATE" => "standard.php"
                                ),
                                false
                            );?>
                        </div>
                    </div>
                    <section class="price-service">
                        <h2 class="h3">Цены</h2>
                        <h3 class="h4">Проверка углов установки колес:<span>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "COMPOSITE_FRAME_MODE" => "A",
                                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include/page_skhod-razval-3d/proverka_uglov.php",
                                        "EDIT_TEMPLATE" => "standard.php"
                                    ),
                                    false
                                );?> р.</span></h3>
                        <script src="<?=SITE_TEMPLATE_PATH?>/js/PriceTable.js"></script>
                        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"skhod-razval-3d", 
	array(
		"COMPONENT_TEMPLATE" => "skhod-razval-3d",
		"IBLOCK_TYPE" => "service",
		"IBLOCK_ID" => "7",
		"NEWS_COUNT" => "99",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "passenger_car",
			1 => "crossovers_minivans_1",
			2 => "crossovers_minivans_2",
			3 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "СХОД-РАЗВАЛ 3D",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
                    </section>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]    ."/bitrix/footer.php");?>