<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "О ТКР-Моторс");
$APPLICATION->SetPageProperty("keywords", "территория качественного ремонта, Рублевское шоссе, MOTUL, PETRONAS, CASTROL, техническое обслуживание, ремонт агрегаторов рулевого управления, ремонт двигателя, Ремонт и обслуживание автокондиционеров, Шиномонтаж, Диагностика и ремонт ходовой части, Сход-развал 3D, Ремонт АКПП, Ремонт МКПП, Ремонт DSG");
$APPLICATION->SetPageProperty("description", "Весь технический персонал нашего техцентра обладает большим опытом работы, что позволяет минимизировать сроки ремонта и является гарантией качества");
$APPLICATION->SetTitle("О нас");
$APPLICATION->AddChainItem("О нас");
?>
<div id="about">
    <div class="back-image">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col s12 l6 xl5">
                        <p class="h4 down">
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>