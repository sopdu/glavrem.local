<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Контакты ТКР-Моторс");
$APPLICATION->SetPageProperty("description", "Контактные данные ТКР-Моторс");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->AddChainItem("Конткты");
?>
    <div class="back-image contact">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 xl4">
                        <h2>Адрес:</h2>
                        <div class="valign-wrapper">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/place.svg" alt="адрес"/>
                            <p>Рублёвское шоссе, 68Ас3<br /><span class="grey-color">(м. Крылатское)</span></p>
                        </div>
                    </div>
                    <div class="col s12 m6 xl4">
                        <h2>Телефон:</h2>
                        <div class="valign-wrapper">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/phone.svg" alt="телефон"/>
                            <p>
                                <a href="<?=$sopdu->phone($_SERVER["DOCUMENT_ROOT"]."/local/templates/sopdu/include/phone.php")?>">
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
                                </a>
                                <br />
                                +7&nbsp;(495)&nbsp;<b>726-34-89</b>
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m12 xl4">
                        <h2>Время работы:</h2>
                        <div class="valign-wrapper">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/time.svg" alt="телефон"/>
                            <p>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "COMPOSITE_FRAME_MODE" => "A",
                                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include/time_work.php",
                                        "EDIT_TEMPLATE" => "standard.php"
                                    ),
                                    false
                                );?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="https://yandex.ru/maps/?um=constructor%3A7d6c001d3deaa950e10af3fdd929b4c8e3f6f20a984906c4784799b6d1ee9428&source=constructorLink" class="map" target="_blank" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/map.jpg)"></a>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>