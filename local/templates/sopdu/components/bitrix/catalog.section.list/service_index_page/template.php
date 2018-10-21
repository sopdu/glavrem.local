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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div id="service">
    <div class="container indent">
        <h2 class="h2"><?=GetMessage("ils_title")?></h2>
        <div class="row">
            <?$itemNum = 1;?>
            <?foreach ($arResult['SECTIONS'] as &$arSection):?>
                <?if($arSection["UF_IND_SERVICE"] == 1 and $itemNum < 4):?>
                    <?
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                    ?>
                    <div class="col s12 m6 l4" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
                        <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="valign-wrapper hover-block">
                            <div>
                                <img src="<?=SITE_TEMPLATE_PATH?><?=$arSection["UF_ICON"]?>" alt="<?=$arSection["NAME"]?>" class="center-block responsive-img"/ />
                            </div>
                            <div><?=$arSection["NAME"]?></div>
                        </a>
                    </div>
                    <?$itemNum++;?>
                <?endif;?>
            <?endforeach;?>
        </div>
    </div>
</div>