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
<div class="container indent">
    <?foreach($arResult["SECTIONS"] as $arSection):?>
        <?
            $this->AddEditAction('section_'.$arSection['ID'], $arSection['ADD_ELEMENT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_ADD"), array('ICON' => 'bx-context-toolbar-create-icon'));
            $this->AddEditAction('section_'.$arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
            $this->AddDeleteAction('section_'.$arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_SECTION_DELETE_CONFIRM')));
        ?>
        <h2 id="<?=$this->GetEditAreaId('section_'.$arSection['ID']);?>"><?=$arSection["NAME"]?></h2>
        <div class="row album">
            <?foreach($arSection["ITEMS"] as $arItem):?>
                    <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')));
                    ?>

                    <div class="col s12 m6 l4 xl3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" data-fancybox="remzona" alt="<?=$arItem["PICTURE"]["ALT"]?>" title="<?=$arItem["PICTURE"]["TITLE"]?>">
                            <div style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)" class="hoverable z-depth-1"></div>
                        </a>
                    </div>
            <?endforeach;?>
        </div>
    <?endforeach;?>
</div>
