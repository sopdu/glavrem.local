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
    <script>
<?
$sectionZapros = CIBlockSection::GetList(
    array("SORT"=>"ASC"),
    array("IBLOCK_ID" => $arParams["IBLOCK_ID"]),
    false,
    array("ID", "CODE", "NAME")
);
?>
<?while($sectionRow = $sectionZapros->GetNext()):?>
    var title_<?=str_replace('-', '_', $sectionRow["CODE"])?> = [
        <?
        $endPropNameTmp = end($arResult["ITEMS"][0]["PROPERTIES"]);
        $endPropName = $endPropNameTmp["ID"];
        ?>
        <?foreach ($arResult["ITEMS"][0]["PROPERTIES"] as $propName):?>
            '<?=$propName["NAME"]?>'<?if($endPropName != $propName["ID"]):?>,<?endif;?>
        <?endforeach;?>
    ];
    var price_<?=str_replace('-', '_', $sectionRow["CODE"])?> = [
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if($arItem["IBLOCK_SECTION_ID"] == $sectionRow["ID"]):?>
                {
                    name: '<?=$arItem["NAME"]?>',
                    price: [
                        <?
                        foreach ($arItem["PROPERTIES"] as $killEmptyKey=>$killEmptyVal){
                            if(empty($killEmptyVal["VALUE"])) {
                                unset ($arItem["PROPERTIES"][$killEmptyKey]);
                            }
                        }
                        $endPropItemTmp = end($arItem["PROPERTIES"]);
                        $endPropItem = $endPropItemTmp["ID"];
                        ?>
                        <?foreach ($arItem["PROPERTIES"] as $propItem):?>
                        <?=$propItem["VALUE"]?><?if($endPropItem != $propItem["ID"]):?>,<?endif;?>
                        <?endforeach;?>
                    ]
                }<?if($endItem != $arItem["ID"]):?>,<?endif;?>
            <?endif;?>
        <?endforeach;?>
    ];
    var table_<?=str_replace('-', '_', $sectionRow["CODE"])?> = new PriceTable('<?=$sectionRow["NAME"]?>', title_<?=str_replace('-', '_', $sectionRow["CODE"])?>, price_<?=str_replace('-', '_', $sectionRow["CODE"])?>);
    table_<?=str_replace('-', '_', $sectionRow["CODE"])?>.init({multiplySum: 4});
<?endwhile;?>
</script>