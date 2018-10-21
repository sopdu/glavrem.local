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
<div class="back-image col s12">
    <div class="overlay">
        <div class="container padd">
            <div class="row inform">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="col s12 m6 l4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="z-depth-1">
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                <div class="fon-img" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)"></div>
                            </a>
                            <p class="h4">
                                <?=$arItem["NAME"]?>
                            </p>
                            <p>
                                <?=$arItem["PREVIEW_TEXT"]?>
                            </p>
                            <p class="small">
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="link">Подробнее</a>
                            </p>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>