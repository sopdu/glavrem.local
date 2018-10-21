            <?if(
                CSite::InDir('/index.php') ||
                CSite::InDir('/gallery.php') ||
                CSite::InDir('/service/') ||
                CSite::InDir('/infotmation/') ||
                CSite::InDir('/contacts.php')
            ):?>
                <div class="enqueue back-image">
                    <div class="container">
                        <div class="row">
                            <div class="col s12 m7 l8">
                                <p class="h2">Не стой в&nbsp;очереди!</p>
                            </div>
                            <div class="col s12 m5 l4">
                                <a href="#" onclick="return false;" class="b24-web-form-popup-btn-7 btn-large btn-block">Записаться</a>
                                <?/*<a href="#enqueue" class="btn-large btn-block modal-trigger">Записаться</a>*/?>
                            </div>
                        </div>
                    </div>
                </div>
            <?endif;?>
            <?
                if(CSite::InDir('/review.php')){
                    require_once ($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/review_form.php');
                }
            ?>
            <?if(CSite::InDir('/index.php')):?>
                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"index_comment", 
	array(
		"COMPONENT_TEMPLATE" => "index_comment",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "3",
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
		"INCLUDE_SUBSECTIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Отзывы",
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
                <div class="container technic">
                    <div class="row valign-wrapper h4">
                        <div class="col">
                            <b>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "COMPOSITE_FRAME_MODE" => "A",
                                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include/index_bottom_text_1.php",
                                        "EDIT_TEMPLATE" => "standard.php"
                                    ),
                                    false
                                );?>
                            </b>
                        </div>
                        <div class="col valign-wrapper">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/technic.svg" alt="технический персонал" />
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "COMPOSITE_FRAME_MODE" => "A",
                                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH."/include/index_bottom_text_2.php",
                                    "EDIT_TEMPLATE" => "standard.php"
                                ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
            <?endif;?>
        </div>
        <footer id="footer">
            <div class="overlay">
                <div class="container">
                    <div class="row flex-box">
                        <div class="col logo">
                            <a href="/">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="Территория качественного ремонта" class="responsive-img"/>
                            </a>
                            <p>
                                <small>
                                    <?$APPLICATION->IncludeComponent(
                                        "sopdu:copyright",
                                        ".default",
                                        array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "COMPOSITE_FRAME_MODE" => "A",
                                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                                            "ChoiceText" => "ТКР-Моторс",
                                            "ChoiceYeare" => "2018"
                                        ),
                                        false
                                    );?>
                                </small>
                            </p>
                        </div>
                        <div class="col hide-on-small-only">
                            <p>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "COMPOSITE_FRAME_MODE" => "A",
                                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include/slogan.php",
                                        "EDIT_TEMPLATE" => "standard.php"
                                    ),
                                    false
                                );?>
                            </p>
                            <?require ($_SERVER["DOCUMENT_ROOT"].'/local/templates/sopdu/include/sopdu.php');?>
                        </div>
                        <div class="col hide">
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                "CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
                                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                "COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
                                "COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
                            ),
                                false
                            );?>
                        </div>
                        <div class="col">
                            <p class="right-align right">
                                <a href="<?=$sopdu->phone($_SERVER["DOCUMENT_ROOT"]."/local/templates/sopdu/include/phone.php")?>" class="h4">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        ".default",
                                        array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "COMPOSITE_FRAME_MODE" => "A",
                                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
                                            "EDIT_TEMPLATE" => "standard.php"
                                        ),
                                        false
                                    );?>
                                </a><br />
                                <a href="#callback" class="link modal-trigger">Заказать звонок</a>
                            </p>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/phone.svg" alt="телефон" class="right"/>
                        </div>
                        <div class="col show-on-small center-align">
                            <small>
                                <?$APPLICATION->IncludeComponent(
                                    "sopdu:copyright",
                                    ".default",
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "COMPOSITE_FRAME_MODE" => "A",
                                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                                        "ChoiceText" => "ТКР-Моторс",
                                        "ChoiceYeare" => "2018"
                                    ),
                                    false
                                );?>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Modal-->
        <div id="callback" class="modal">
            <div class="modal-content center-align">
                <button class="close btn-flat modal-close">&times;</button>
                <h3>Заказать звонок</h3>
                <script id="bx24_form_inline" data-skip-moving="true">
                    (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                        (w[b].forms=w[b].forms||[]).push(arguments[0])};
                        if(w[b]['forms']) return;
                        var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
                        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                    })(window,document,'https://glavrem.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

                    b24form({"id":"6","lang":"ru","sec":"930u3z","type":"inline"});
                </script>
            </div>
        </div>
        <?if(
            CSite::InDir('/index.php') ||
            CSite::InDir('/gallery.php') ||
            CSite::InDir('/service/') ||
            CSite::InDir('/infotmation/') ||
            CSite::InDir('/contacts.php')
        ):?>
            <div id="enqueue" class="modal">
                <div class="modal-content center-align">
                    <button class="close btn-flat modal-close">&times;</button>
                    <h3>Записаться</h3>
                    <script id="bx24_form_inline" data-skip-moving="true">
                        (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                            (w[b].forms=w[b].forms||[]).push(arguments[0])};
                            if(w[b]['forms']) return;
                            var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
                            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                        })(window,document,'https://glavrem.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

                        b24form({"id":"7","lang":"ru","sec":"e7atsk","type":"button","click":""});
                    </script><?/*<button class="b24-web-form-popup-btn-7">Мы перезвоним вам</button>*/?>
                    <?/*
                    <script id="bx24_form_inline" data-skip-moving="true">
                        (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                            (w[b].forms=w[b].forms||[]).push(arguments[0])};
                            if(w[b]['forms']) return;
                            var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
                            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                        })(window,document,'https://glavrem.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

                        b24form({"id":"7","lang":"ru","sec":"e7atsk","type":"inline"});
                    </script>
*/?>
                </div>
            </div>
        <?endif;?>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/materialize.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
        <script data-skip-moving="true">
            (function(w,d,u){
                var s=d.createElement('script');s.async=1;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn.bitrix24.ru/b6966199/crm/site_button/loader_1_1gi7q0.js');
        </script>
    </body>
</html>