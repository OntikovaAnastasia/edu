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
<?
use Bitrix\Main\Localization\Loc;
?>
<?
use Bitrix\Catalog\PriceTable;
use Bitrix\Main\Loader;
?>
<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2><?= Loc::getMessage('New_Properties_for_You')?></h2>
				</div>
			</div>
		</div>
		<div class="row mb-5">
		<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('NEWS_DELETE_CONFIRM')));
				?>
			<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-md-6 col-lg-4 mb-4">
		 		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block"> <figure> <img alt="Image" src="<?echo $arItem["PREVIEW_PICTURE"]['SRC']?>" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 						<span class="price rounded"><?echo $arItem["PROPERTY_PRICE_VALUE"]?>₽</span>
						<h3 class="title"><?echo $arItem["NAME"]?></h3>
						<p class="location">
						<?echo $arItem["PREVIEW_TEXT"]?>
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
							<?= Loc::getMessage('Area')?>: <strong><?echo $arItem["PROPERTY_AREA_VALUE"]?>м<sup>2</sup></strong>
							</div>
							<div class="col">
							<?= Loc::getMessage('Floor')?>: <strong><?echo $arItem["PROPERTY_NUM_FLOOR_VALUE"]?></strong>
							</div>
							<div class="col">
							<?= Loc::getMessage('Bath')?>: <strong><?echo $arItem["PROPERTY_NUM_BATHROOM_VALUE"]?></strong>
							</div>
							<div class="col">
							<?= Loc::getMessage('Garages')?>: <strong><?echo $arItem["PROPERTY_GARAGE_VALUE"]?:"нет"?></strong>
							</div>
						</div>
					</div>
				</div>
 				</a>
			</div>
			<?endforeach;?>
		</div>		
	</div>
</div>

