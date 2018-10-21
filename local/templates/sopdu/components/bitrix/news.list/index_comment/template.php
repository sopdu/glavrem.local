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
<div id="review" class="back-image">
    <div class="overlay">
        <h2 class="center-align"><?=GetMessage("ils_title_rew")?></h2>
        <div class="carousel">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <a class="carousel-item" href="#<?=$arItem['ID']?>!" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div>
                        <p class="h4">
                            <b><?=$arItem["NAME"]?></b>
                        </p>
                        <p><?=$arItem["PREVIEW_TEXT"];?></p>
                    </div>
                </a>
            <?endforeach;?>
        </div>
    </div>
</div>
