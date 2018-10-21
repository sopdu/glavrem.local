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
    var title = [
        <?
            $endPropNameTmp = end($arResult["ITEMS"][0]["PROPERTIES"]);
            $endPropName = $endPropNameTmp["ID"];
        ?>
        <?foreach ($arResult["ITEMS"][0]["PROPERTIES"] as $propName):?>
            '<?=$propName["NAME"]?>'<?if($endPropName != $propName["ID"]):?>,<?endif;?>
         <?endforeach;?>
    ];
    var price = [
        <?foreach($arResult["ITEMS"] as $arItem):?>
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
        <?endforeach;?>
    ];
    var table = new PriceTable('Регулировка углов установки колес:', title, price);
    table.init({tableClassName: 'alignment-price'});
</script>