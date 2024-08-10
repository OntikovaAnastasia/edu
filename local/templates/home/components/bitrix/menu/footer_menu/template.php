<?
use Bitrix\Main\Localization\Loc;
?>
<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<?if (!empty($arResult)):?>
	<div class="col-lg-4 mb-5 mb-lg-0">
          
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4"><?= Loc::getMessage('Navigations')?></h3>
			  </div>
			  <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		
		<?else:?>
			
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

	

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
          </div>
</div>
</div>
<?endif?>