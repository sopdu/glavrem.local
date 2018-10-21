<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @var CMain $APPLICATION
 * @var CUser $USER
 */
CUtil::InitJSCore(array('ajax', 'fx', 'viewer'));
// ************************* Input params***************************************************************
$arParams["SHOW_LINK_TO_FORUM"] = ($arParams["SHOW_LINK_TO_FORUM"] == "N" ? "N" : "Y");
$arParams["FILES_COUNT"] = intval(intval($arParams["FILES_COUNT"]) > 0 ? $arParams["FILES_COUNT"] : 1);
$arParams["IMAGE_SIZE"] = (intval($arParams["IMAGE_SIZE"]) > 0 ? $arParams["IMAGE_SIZE"] : 100);
if (LANGUAGE_ID == 'ru'):
	$path = str_replace(array("\\", "//"), "/", dirname(__FILE__)."/ru/script.php");
	include($path);
endif;
// *************************/Input params***************************************************************
?>ddddвввввввввввв<?
if (!empty($arResult["MESSAGES"])):
    /*

    <div class="col s12">
        <div class="re-comment">
            <h4 class="h4"><b>Алла Подрезова</b></h4>
            <p>
                Добрый день! Заезжала в этот не большой сервис на замену масла и ТО, что могу сказать, адекватный персонал, грамотно подобрали масло, все фильтра и колодки по ТО есть на складе у меня Мерседес С-класса, не катался по рынкам в поисках запчастей.
            </p>
        </div>
    </div>
*/
$iCount = 0;
foreach ($arResult["MESSAGES"] as $res):
	$iCount++;
	?>
    <div class="col s12">
        <div class="re-comment">11111

		<?
		if ($arParams["SHOW_RATING"] == "Y")
		{
			?>
			<div class="review-rating rating_vote_graphic">
				<?
				$arRatingParams = Array(
						"ENTITY_TYPE_ID" => "FORUM_POST",
						"ENTITY_ID" => $res["ID"],
						"OWNER_ID" => $res["AUTHOR_ID"],
						"PATH_TO_USER_PROFILE" => strlen($arParams["PATH_TO_USER"]) > 0? $arParams["PATH_TO_USER"]: $arParams["~URL_TEMPLATES_PROFILE_VIEW"]
					);
				if (!isset($res['RATING']))
					$res['RATING'] = array(
							"USER_VOTE" => 0,
							"USER_HAS_VOTED" => 'N',
							"TOTAL_VOTES" => 0,
							"TOTAL_POSITIVE_VOTES" => 0,
							"TOTAL_NEGATIVE_VOTES" => 0,
							"TOTAL_VALUE" => 0
						);


				$arRatingParams = array_merge($arRatingParams, $res['RATING']);
				$APPLICATION->IncludeComponent( "bitrix:rating.vote", $arParams["RATING_TYPE"], $arRatingParams, $component, array("HIDE_ICONS" => "Y"));
				?>
			</div>
		<?
		}
		?>
<div>
		<b><?
		if (intval($res["AUTHOR_ID"]) > 0 && !empty($res["AUTHOR_URL"])):
			?><a href="<?=$res["AUTHOR_URL"]?>"><?=$res["AUTHOR_NAME"]?></a><?
		else:
			?><?=$res["AUTHOR_NAME"]?><?
		endif;
		?></b>
		<span class='message-post-date'><?=$res["POST_DATE"]?></span>
</div>

	</td></tr>
	</thead>
	<tbody>
	<tr><td>
		<div class="reviews-text" id="message_text_<?=$res["ID"]?>"><?=$res["POST_MESSAGE_TEXT"]?></div>
<?
	foreach ($res["FILES"] as $arFile):
	?><div class="reviews-message-img"><?
		?><?$GLOBALS["APPLICATION"]->IncludeComponent(
			"bitrix:forum.interface", "show_file",
			Array(
				"FILE" => $arFile,
				"WIDTH" => $arResult["PARSER"]->image_params["width"],
				"HEIGHT" => $arResult["PARSER"]->image_params["height"],
				"CONVERT" => "N",
				"FAMILY" => "FORUM",
				"SINGLE" => "Y",
				"RETURN" => "N",
				"SHOW_LINK" => "Y"),
			null,
			array("HIDE_ICONS" => "Y"));
	?></div><?
	endforeach;
?>
	</td></tr>


    </div>
    </div>

<?endforeach;?>
		</div>
	</div>
</div>
<?

if (strlen($arResult["NAV_STRING"]) > 0 && $arResult["NAV_RESULT"]->NavPageCount > 1):
?>
<div class="reviews-navigation-box reviews-navigation-bottom">
	<div class="reviews-page-navigation">
		<?=$arResult["NAV_STRING"]?>
	</div>
	<div class="reviews-clear-float"></div>
</div>
<?
endif;


if (!empty($arResult["read"]) && $arParams["SHOW_LINK_TO_FORUM"] != "N"):
?>
<div class="reviews-link-box">
	<div class="reviews-link-box-text">
		<a href="<?=$arResult["read"]?>"><?=GetMessage("F_C_GOTO_FORUM");?></a>
	</div>
</div>

<?
endif;

endif;

if (empty($arResult["ERROR_MESSAGE"]) && !empty($arResult["OK_MESSAGE"])):
?>
<div class="reviews-note-box reviews-note-note">
	<a name="reviewnote"></a>
	<div class="reviews-note-box-text"><?=ShowNote($arResult["OK_MESSAGE"]);?></div>
</div>
<?
endif;

if ($arResult["SHOW_POST_FORM"] != "Y"):
	return false;
endif;


if (!empty($arResult["MESSAGE_VIEW"])):
?>
<div class="reviews-preview">
<div class="reviews-header-box">
	<div class="reviews-header-title"><a name="postform"><span><?=GetMessage("F_PREVIEW")?></span></a></div>
</div>

<div class="reviews-info-box reviews-post-preview">
	<div class="reviews-info-box-inner">
		<div class="reviews-post-entry">
			<div class="reviews-post-text"><?=$arResult["MESSAGE_VIEW"]["POST_MESSAGE_TEXT"]?></div>
<?
		if (!empty($arResult["REVIEW_FILES"])):
?>
			<div class="reviews-post-attachments">
				<label><?=GetMessage("F_ATTACH_FILES")?></label>
<?
			foreach ($arResult["REVIEW_FILES"] as $arFile):
?>
				<div class="reviews-post-attachment"><?
				?><?$GLOBALS["APPLICATION"]->IncludeComponent(
					"bitrix:forum.interface", "show_file",
					Array(
						"FILE" => $arFile,
						"WIDTH" => $arResult["PARSER"]->image_params["width"],
						"HEIGHT" => $arResult["PARSER"]->image_params["height"],
						"CONVERT" => "N",
						"FAMILY" => "FORUM",
						"SINGLE" => "Y",
						"RETURN" => "N",
						"SHOW_LINK" => "Y"),
					null,
					array("HIDE_ICONS" => "Y"));
				?></div>
<?
			endforeach;
?>
			</div>
<?
		endif;
?>
		</div>
	</div>
</div>
<div class="reviews-br"></div>
</div>
<?
endif;
?>
<script type="text/javascript">
	BX.ready(function(){
		BX.message({
			no_topic_name : '<?=GetMessageJS("JERROR_NO_TOPIC_NAME")?>',
			no_message : '<?=GetMessageJS("JERROR_NO_MESSAGE")?>',
			max_len : '<?=GetMessageJS("JERROR_MAX_LEN")?>',
			f_author : ' <?=GetMessageJS("JQOUTE_AUTHOR_WRITES")?>:\n',
			f_cdm : '<?=GetMessageJS("F_DELETE_CONFIRM")?>',
			f_show : '<?=GetMessageJS("F_SHOW")?>',
			f_hide : '<?=GetMessageJS("F_HIDE")?>',
			f_wait : '<?=GetMessageJS("F_WAIT")?>',
			MINIMIZED_EXPAND_TEXT : '<?=CUtil::addslashes($arParams["MINIMIZED_EXPAND_TEXT"])?>',
			MINIMIZED_MINIMIZE_TEXT : '<?=CUtil::addslashes($arParams["MINIMIZED_MINIMIZE_TEXT"])?>'
		});
		BX.viewElementBind(BX('<?=$arParams["FORM_ID"]?>container'), {},
			function(node){
				return BX.type.isElementNode(node) && (node.getAttribute('data-bx-viewer') || node.getAttribute('data-bx-image'));
			}
		);
	});
</script>
<?
include(__DIR__."/form.php");
?>