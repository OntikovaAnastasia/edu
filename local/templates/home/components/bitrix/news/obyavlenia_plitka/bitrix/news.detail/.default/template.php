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
<?if(is_array($arResult["DETAIL_PICTURE"])):?>
 <div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" data-aos="fade" data-stellar-background-ratio="0.5">
 <?endif;?>     
 <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?=Loc::getMessage("PROPERTY_DETAILS")?></span>
            <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?>₽</strong></p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
              <?if(is_array($arResult["DISPLAY_PROPERTIES"]["GALLERY_IMG"]["FILE_VALUE"])):?>
                <?if(count($arResult["DISPLAY_PROPERTIES"]["GALLERY_IMG"]["VALUE"]) > 1 ):?>
                  <?foreach($arResult["DISPLAY_PROPERTIES"]["GALLERY_IMG"]["FILE_VALUE"]as $PHOTO):?>
                      <div><img src="<?=$PHOTO["SRC"]?>" alt="Image" class="img-fluid"></div>
                    <?endforeach;?>
                  <?else:?>
                    <div><img src="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY_IMG"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></div>
                <?endif;?>
              <?endif;?>
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?>₽</strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs"><?=Loc::getMessage("DATE_UPDATE")?></span>
                    <span class="property-specs-number"><?echo $arResult["TIMESTAMP_X"];?></span>
                  </li>
                  <li>
                    <span class="property-specs"><?=Loc::getMessage("NUM_FLOOR")?></span>
                    <span class="property-specs-number"><?echo $arResult["DISPLAY_PROPERTIES"]["NUM_FLOOR"]["VALUE"];?></span>
                  </li>
                  <li>
                    <span class="property-specs"><?=Loc::getMessage("AREA")?></span>
                    <span class="property-specs-number"><?echo $arResult["DISPLAY_PROPERTIES"]["AREA"]["VALUE"];?></span>
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=Loc::getMessage("NUM_BATHROOM")?></span>
                  <strong class="d-block"><?echo $arResult["DISPLAY_PROPERTIES"]["NUM_BATHROOM"]["VALUE"];?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=Loc::getMessage("GARAGE")?></span>
                  <strong class="d-block"><?echo $arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"];?></strong>
                </div>
              </div>
              <h2 class="h4 text-black"><?=Loc::getMessage("MORE_INFO")?></h2>
              <?echo $arResult["DETAIL_TEXT"];?>

              <?if(is_array($arResult["DISPLAY_PROPERTIES"]["GALLERY_IMG"]["FILE_VALUE"])):?>
              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3"><?=Loc::getMessage("PROPERTY_GALLERY")?></h2>
                </div>

                <?if(count($arResult["DISPLAY_PROPERTIES"]["GALLERY_IMG"]["VALUE"]) > 1 ):?>
                  <?foreach($arResult["DISPLAY_PROPERTIES"]["GALLERY_IMG"]["FILE_VALUE"]as $GALLERY):?>
                      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a href="<?=$GALLERY["SRC"]?>" class="image-popup gal-item"><img src="<?=$GALLERY["SRC"]?>" alt="Image" class="img-fluid"></a>
                      </div>
                    <?endforeach;?>
                    <?else:?>
                      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a href="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY_IMG"]["FILE_VALUE"]["SRC"]?>" class="image-popup gal-item"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY_IMG"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></a>
                      </div>
                <?endif;?>
              </div>
              <?endif;?>

              <?if(is_array($arResult["DISPLAY_PROPERTIES"]["MATERIAL"]["FILE_VALUE"])):?>
              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3"><?=Loc::getMessage("ADDITIONAL_MATERIALS")?></h2>
                </div>
                <?if(count($arResult["DISPLAY_PROPERTIES"]["MATERIAL"]["VALUE"]) > 1 ):?>
                  <?foreach($arResult["DISPLAY_PROPERTIES"]["MATERIAL"]["FILE_VALUE"]as $MATERIAL):?>
                      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a href="<?=$MATERIAL["SRC"]?>" class="image-popup gal-item"><img src="<?=$MATERIAL["SRC"]?>" alt="Image" class="img-fluid"></a>
                      </div>
                    <?endforeach;?>
                    <?else:?>
                      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a href="<?=$arResult["DISPLAY_PROPERTIES"]["MATERIAL"]["FILE_VALUE"]["SRC"]?>" class="image-popup gal-item"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["MATERIAL"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></a>
                      </div>
                <?endif;?>
              </div>
              <?endif;?>
            </div>
            <?if(is_array($arResult["DISPLAY_PROPERTIES"]["LINK_RES"])):?>
              <h2 class="h4 text-black"><?=Loc::getMessage("LINK")?></h2>
              <?foreach($arResult["DISPLAY_PROPERTIES"]["LINK_RES"]["VALUE"]as $LINK):?>
                <a href="<?=$LINK?>" ><?=$LINK?></a>
              <?endforeach;?>
            <?endif;?>
          </div>

          <div class="col-lg-4 pl-md-5">
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3"><?=Loc::getMessage("CONTACT_AGENT")?></h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name"><?=Loc::getMessage("NAME")?></label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email"><?=Loc::getMessage("EMAIL")?></label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone"><?=Loc::getMessage("PHONE")?></label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="<?=Loc::getMessage("SEND_MESSAGE")?>">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3"><?=Loc::getMessage("PARAGRAPH")?></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
