<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div id="gallery">
    <div class="container indent">
        <h1><?=GetMessage("ils_title")?></h1>
        <div class="row album">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?if($arItem["PROPERTIES"]["show_index"]["VALUE"] == 'Да'):?>
                    <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="col s12 m6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" data-fancybox="gallery">
                            <div style="background-image: url(<?#=$arItem["PREVIEW_PICTURE"]["SRC"]?><?=$arItem["DETAIL_PICTURE"]["SRC"]?>)"  class="hoverable z-depth-1"></div>
                        </a>
                    </div>
                <?endif;?>
            <?endforeach;?>
            <div class="col s12 m6">
                <a href="/gallery.php">
                    <div class="valign-wrapper z-depth-1">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/image.svg" alt="фотогаллерея автосервиса"/>
                        <b><?=GetMessage("ils_goToGellery")?></b>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>