<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
?>
<ul class="collapsible">
    <li>
        <div class="enqueue back-image collapsible-header" tabindex="0">
            <div class="container">
                <div class="row">
                    <div class="col s12 m7 l8">
                        <p class="h2">Написать отзыв</p>
                    </div>
                    <div class="col s12 m5 l4">
                        <span class="btn-large btn-block modal-trigger">Написать</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 collapsible-body">
            <div class="container collapsible-content">
                <?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add", 
	"review", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALLOW_DELETE" => "N",
		"ALLOW_EDIT" => "N",
		"COMPONENT_TEMPLATE" => "review",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Ваше Имя",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "Отзыв",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
		),
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"LEVEL_LAST" => "Y",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"NAV_ON_PAGE" => "10",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
		),
		"PROPERTY_CODES_REQUIRED" => array(
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "Y",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Ваш отзыв добавлен",
		"USER_MESSAGE_EDIT" => "Ваш отзыв сожранен",
		"USE_CAPTCHA" => "Y",
		"SEF_FOLDER" => ""
	),
	false
);?>
            <?/*
                <form>
                    <div class="input-field">
                        <input type="text" value="" id="sender" placeholder="Ваше Имя">
                    </div>
                    <div class="input-field">
                        <textarea placeholder="Комментарий"></textarea>
                    </div>
                    <div class="input-field row captcha">
                        <div class="col s12 m8 valign-wrapper">
                            <img src="img/captcha.jpg" alt="" class="left">
                            <input id="captcha_word" name="captcha_word" type="text" class="inline">
                        </div>
                        <div class="col s12 m4 right-align">
                            <input type="submit" class="btn" value="Написать отзыв">
                        </div>
                    </div>
                </form>

            */?>
            </div>
        </div>
    </li>
</ul>
