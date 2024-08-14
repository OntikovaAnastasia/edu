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
Loc::loadLanguageFile(__FILE__);
?>

<div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h2><?echo $arParams["OBYAVLENIA_TITLE"]?></h2>
            </div>
          </div>
        </div>
        <div class="row mb-5">
			<?foreach($arResult["ITEMS"] as $arItem):?>
        <?
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('NEWS_DELETE_CONFIRM')));
        ?>
          <div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
              <figure>
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded"><?echo $arItem["DISPLAY_PROPERTIES"]['PRICE']['VALUE']?>₽</span>
                  <h3 class="title"><?echo $arItem["NAME"]?></h3>
                  <p class="location"><?echo $arItem["PREVIEW_TEXT"]?></p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span><?= Loc::getMessage('AREA')?>:</span>
                      <strong><?echo $arItem["DISPLAY_PROPERTIES"]['AREA']['VALUE']?>м<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span><?= Loc::getMessage('FLOOR')?>:</span>
                      <strong><?echo $arItem["DISPLAY_PROPERTIES"]['NUM_FLOOR']['VALUE']?></strong>
                    </div>
                    <div class="col">
                      <span><?= Loc::getMessage('BATH')?>:</span>
                      <strong><?echo $arItem["DISPLAY_PROPERTIES"]['NUM_BATHROOM']['VALUE']?></strong>
                    </div>
                    <div class="col">
                      <span><?= Loc::getMessage('GARAGES')?>:</span>
                      <strong><?echo $arItem["DISPLAY_PROPERTIES"]['GARAGE']['VALUE']?></strong>
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

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
  <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>