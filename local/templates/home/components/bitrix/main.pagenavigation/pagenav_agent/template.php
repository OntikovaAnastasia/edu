<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);


?>


	<div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
<?if($arResult["REVERSED_PAGES"] === true):?>

	
	
	<?
	$page = $arResult["START_PAGE"] - 1;
	while($page >= $arResult["END_PAGE"] + 1):
	?>
		<?if ($page == $arResult["CURRENT_PAGE"]):?>
			<li class="bx-active"><span><?=($arResult["PAGE_COUNT"] - $page + 1)?></span></li>
		<?else:?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($page))?>"><span><?=($arResult["PAGE_COUNT"] - $page + 1)?></span></a>
		<?endif?>

		<?$page--?>
	<?endwhile?>

	<?if ($arResult["CURRENT_PAGE"] > 1):?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate(1))?>"><span><?=$arResult["PAGE_COUNT"]?></span></a>
		<?endif?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["CURRENT_PAGE"]-1))?>"><span><?echo GetMessage("round_nav_forward")?></span></a>
	<?else:?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<li class="bx-active"><span><?=$arResult["PAGE_COUNT"]?></span></li>
		<?endif?>
			
	<?endif?>

<?else:?>

	<?if ($arResult["CURRENT_PAGE"] > 1):?>
		<?if ($arResult["CURRENT_PAGE"] > 2):?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["CURRENT_PAGE"]-1))?>"><span><?echo GetMessage("round_nav_back")?></span></a>
		<?else:?>
			
		<?endif?>
			<a href="<?=htmlspecialcharsbx($arResult["URL"])?>"><span>1</span></a>
	<?else:?>
			
			<a class="active"><span>1</span></a>
	<?endif?>

	<?
	$page = $arResult["START_PAGE"] + 1;
	while($page <= $arResult["END_PAGE"]-1):
	?>
		
	<?endwhile?>

	<?if($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]):?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
		<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"]))?>"><span><?=$arResult["PAGE_COUNT"]?></span></a></li>
		<?endif?>
		
	<?else:?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<a class="active"><span><?=$arResult["PAGE_COUNT"]?></span></a>
		<?endif?>
			
	<?endif?>
<?endif?>
 </div>
          </div>  
    </div>

