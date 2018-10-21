<!DOCTYPE html>
<html>
    <head>
        <title><?$APPLICATION->ShowTitle();?></title>
        <?$APPLICATION->ShowHead();?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" rel="shortcut icon">
        <link href="<?=SITE_TEMPLATE_PATH?>/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=SITE_TEMPLATE_PATH?>/css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?$APPLICATION->ShowPanel();?>
        <?require_once ($_SERVER["DOCUMENT_ROOT"].'/local/templates/sopdu/class.php');?>
        <div id="maincontent">
            <header id="header">
                <div class="container">
                    <div class="row flex-box">
                        <div class="col logo">
                            <a href="/">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="Территория качественного ремонта" class="responsive-img"/>
                            </a>
                            <p class="indent show-on-small small">
                                <b><?include ($_SERVER["DOCUMENT_ROOT"]."/local/templates/sopdu/include/slogan.php")?></b>
                            </p>
                            <span class="show-on-small">
                                <button class="btn-flat open">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </span>
                        </div>
                        <div class="col hide">
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
                        </div>
                        <div class="col">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/place.svg" alt="адрес" class="left"/>
                            <p class="left">
                                <a href="https://yandex.ru/maps/?um=constructor%3A7d6c001d3deaa950e10af3fdd929b4c8e3f6f20a984906c4784799b6d1ee9428&source=constructorLink" target="_blank" rel="nofollow">
                                    Рублёвское шоссе, 68Ас3<br><span class="grey-color">(м. Крылатское)</span>
                                </a>
                            </p>
                        </div>
                        <div class="col hide-on-small-only">
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
                                <a href="#callback" class="link grey-color modal-trigger">Заказать звонок</a>
                            </p>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/phone.svg" alt="телефон" class="right"/>
                        </div>
                    </div>
                </div>
            </header>
            <nav id="top-menu" class="z-depth-2">
                <div class="overlay">
                    <div class="container">
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
                </div>
                <button class="close btn-flat show-on-small">&times;</button>
            </nav>
            <?if(!CSite::InDir('/index.php')):?>
                <div class="fon-img" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/fon-title.jpg);">
                    <div class="overlay">
                        <div class="container indent">
                            <h1><?$APPLICATION->ShowTitle(false)?></h1>
                        </div>
                    </div>
                </div>
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
                ),
                    false
                );?>
            <?endif;?>

