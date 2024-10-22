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


<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
		<?echo $arResult["DETAIL_TEXT"];?>
	</div>
		<div class="review-autor">
		<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?>, <?echo $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]?>, <?echo $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap"><img src="<?if(isset($arResult["DETAIL_PICTURE"]["SRC"])):?><?=$arResult["DETAIL_PICTURE"]["SRC"]?><?else:?>/local/templates/exam6/img/no_photo.jpg<?endif;?>" alt="img"></div>
</div>
<?if(isset($arResult["DISPLAY_PROPERTIES"]["DOCUMENT"]["VALUE"])):?>
<div class="exam-review-doc">
<p>Документы:</p>
<?if(count($arResult["DISPLAY_PROPERTIES"]["DOCUMENT"]["VALUE"]) > 1): ?>
	<?foreach($arResult["DISPLAY_PROPERTIES"]["DOCUMENT"]["FILE_VALUE"] as $FILE):?>
<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png"><a href="<?=$FILE["SRC"]?>" download><?=$FILE["ORIGINAL_NAME"]?></a></div>
<?endforeach;?>
<?else:?>
<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png"><a href="<?=$arResult["DISPLAY_PROPERTIES"]["DOCUMENT"]["FILE_VALUE"]["SRC"]?>" download><?=$arResult["DISPLAY_PROPERTIES"]["DOCUMENT"]["FILE_VALUE"]["ORIGINAL_NAME"]?></a></div>
<?endif;?>
</div>
<?endif;?>
<hr>
<a href="<?=$arResult["LIST_PAGE_URL"]?>" class="review-block_back_link"> &larr; К списку отзывов</a>


