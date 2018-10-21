<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "ТКР-Моторс");
$APPLICATION->SetPageProperty("keywords", "территория качественного ремонта, Рублевское шоссе, MOTUL, PETRONAS, CASTROL, техническое обслуживание, ремонт агрегаторов рулевого управления, ремонт двигателя, Ремонт и обслуживание автокондиционеров, Шиномонтаж, Диагностика и ремонт ходовой части, Сход-развал 3D, Ремонт АКПП, Ремонт МКПП, Ремонт DSG");
$APPLICATION->SetPageProperty("description", "ТКР-Моторс на Рублевском шоссе – это современный автосервис, предоставляющий весь спектр качественных услуг по ремонту автомобилей. Мы стремимся к тому, чтобы стать одной из лучших станций технического обслуживания в столице. Для этого мы собрали команду высококвалифицированных мастеров.");
$APPLICATION->SetTitle("Главная");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"index_slider", 
	array(
		"COMPONENT_TEMPLATE" => "index_slider",
		"IBLOCK_TYPE" => "promo",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "20",
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
			0 => "",
			1 => "ils_link",
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
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Слайды",
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
    <div id="about">
        <div class="back-image">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col s12 l6 xl5">
                            <h2 class="h2">О нас</h2>
                            <p class="h4">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "COMPOSITE_FRAME_MODE" => "A",
                                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include/about.php",
                                        "EDIT_TEMPLATE" => "standard.php"
                                    ),
                                    false
                                );?>
                            </p>
                        </div>
                        <div class="col s12 m10 l6 xl6">
                            <div class="valign-wrapper">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/oil.svg" alt="масло" class="left"/>
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
                                                "PATH" => SITE_TEMPLATE_PATH."/include/oil.php",
                                                "EDIT_TEMPLATE" => "standard.php"
                                            ),
                                            false
                                        );?>
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?=SITE_TEMPLATE_PATH?>/img/avto.png" alt="ТКР-Моторс"/>
    </div>

    <div id="service">
        <div class="container indent">
            <h2 class="h2">Основные услуги</h2>
            <div class="row">
                <div class="col s12 m6 l4">
                    <a href="/service/tekhnicheskoe-obsluzhivanie.php" class="valign-wrapper hover-block">
                        <div>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/service/to.jpg" alt="Техническое обслуживание" class="center-block responsive-img"/>
                        </div>
                        <div>
                            Техническое обслуживание
                        </div>
                    </a>
                </div>
                <div class="col s12 m6 l4">
                    <a href="/service/remont-agregatov-rulevogo-upravleniya.php" class="valign-wrapper hover-block">
                        <div>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/service/rudder.jpg" alt="Ремонт агрегатов рулевого управления" class="center-block responsive-img"/>
                        </div>
                        <div>
                            Ремонт агрегатов рулевого управления
                        </div>
                    </a>
                </div>
                <div class="col s12 m6 l4">
                    <a href="/service/remont-akpp-mkpp-dsg.php" class="valign-wrapper hover-block">
                        <div>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/service/akpp.jpg" alt="Ремонт АКПП, МКПП, DSG" class="center-block responsive-img"/>
                        </div>
                        <div>
                            Ремонт АКПП, МКПП, DSG
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"index_gallery", 
	array(
		"COMPONENT_TEMPLATE" => "index_gallery",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "999",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "show_index",
			1 => "",
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
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
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


    <?/*
    <div id="gallery">
        <div class="container indent">
            <h1>Фото автосервиса</h1>
            <div class="row album">
                <div class="col s12 m6">
                    <a href="../img/photo.jpg" data-fancybox="gallery">
                        <div style="background-image: url(img/photo.jpg)"  class="hoverable z-depth-1"></div>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="../img/photo.jpg" data-fancybox="gallery">
                        <div style="background-image: url(img/photo.jpg)" class="hoverable z-depth-1"></div>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="../img/photo.jpg" data-fancybox="gallery">
                        <div style="background-image: url(img/photo.jpg)" class="hoverable z-depth-1"></div>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="../img/photo.jpg" data-fancybox="gallery">
                        <div style="background-image: url(img/photo.jpg)" class="hoverable z-depth-1"></div>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="../img/photo.jpg" data-fancybox="gallery">
                        <div style="background-image: url(img/photo.jpg)" class="hoverable z-depth-1"></div>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="/gallery.html">
                        <div class="valign-wrapper z-depth-1">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/image.svg" alt="фотогаллерея автосервиса"/>
                            <b>Перейти<br />в фотогалерею</b>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    */?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>