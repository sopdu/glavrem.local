<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Услуги ТКР-МОторс");
$APPLICATION->SetPageProperty("keywords", "территория качественного ремонта, Рублевское шоссе, MOTUL, PETRONAS, CASTROL, техническое обслуживание, ремонт агрегаторов рулевого управления, ремонт двигателя, Ремонт и обслуживание автокондиционеров, Шиномонтаж, Диагностика и ремонт ходовой части, Сход-развал 3D, Ремонт АКПП, Ремонт МКПП, Ремонт DSG");
$APPLICATION->SetPageProperty("description", "ТРК-Моторс предоставляет большой спектр услуг качественно и не дорого");
$APPLICATION->SetTitle("Услуги");
?>
    <div class="back-image col s12">
        <div class="overlay">
            <div class="container padd">
                <div class="row service">
                    <div class="col s12 m6 l4">
                        <?/*<a href="tekhnicheskoe-obsluzhivanie.php" class="hover-block">*/?>
                        <a href="#" class="hover-block">
                            <figure class="z-depth-1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/service/to.jpg" alt="Техническое обслуживание"/>
                                <figcaption>Техническое обслуживание</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col s12 m6 l4">
                        <?/*<a href="remont-agregatov-rulevogo-upravleniya.php" class="hover-block">*/?>
                        <a href="#" class="hover-block">
                            <figure class="z-depth-1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/service/rudder.jpg" alt="Ремонт агрегатов рулевого управления"/>
                                <figcaption>Ремонт агрегатов рулевого управления</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col s12 m6 l4">
                        <?/*<a href="remont-dvigatelya.php" class="hover-block">*/?>
                        <a href="#" class="hover-block">
                            <figure class="z-depth-1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/service/engine.jpg" alt="Ремонт двигателя"/>
                                <figcaption>Ремонт двигателя</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col s12 m6 l4">
                        <?/*<a href="remont-i-obsluzhivanie-avtokonditsionerov.php" class="hover-block">*/?>
                        <a href="#" class="hover-block">
                            <figure class="z-depth-1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/service/condit.jpg" alt="Ремонт и обслуживание автокондиционеров"/>
                                <figcaption>Ремонт и обслуживание автокондиционеров</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col s12 m6 l4">
                        <a href="shinomontazh.php" class="hover-block">
                            <figure class="z-depth-1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/service/tire.jpg" alt="Шиномонтаж"/>
                                <figcaption>Шиномонтаж</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col s12 m6 l4">
                        <?/*<a href="diagnostika-i-remont-khodovoy-chasti.php" class="hover-block">*/?>
                        <a href="#" class="hover-block">
                            <figure class="z-depth-1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/service/chassis.jpg" alt="Диагностика и ремонт ходовой части"/>
                                <figcaption>Диагностика и ремонт ходовой части</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col s12 m6 l4">
                        <a href="skhod-razval-3d.php" class="hover-block">
                            <figure class="z-depth-1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/service/alignment.jpg" alt="Сход-развал"/>
                                <figcaption>Сход-развал 3D</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col s12 m6 l4">
                        <?/*<a href="remont-akpp-mkpp-dsg.php" class="hover-block">*/?>
                        <a href="#" class="hover-block">
                            <figure class="z-depth-1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/service/akpp.jpg" alt="Ремонт АКПП, МКПП, DSG"/>
                                <figcaption>Ремонт АКПП, МКПП, DSG</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>