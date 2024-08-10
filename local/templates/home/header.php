<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<?
use Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
echo Loc::getMessage("SOMETHING_LANGUAGE_CONSTANT"); 
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
  <title><?$APPLICATION->ShowTitle()?></title>
  <?$APPLICATION->ShowHead();?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <?  
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");?>

</head>

<body>
<?$APPLICATION->ShowPanel();?>
<div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                  class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/phone.php"
	)
 );?></span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
	                  "bitrix:main.include",
	                  "",
	                  Array(
		                "AREA_FILE_SHOW" => "file",
		                "AREA_FILE_SUFFIX" => "inc",
		                "EDIT_TEMPLATE" => "",
		                "PATH" => "/include/mail.php"
	                    )
                    );?>
                </span></a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
          <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/icon.php"
	)
 );?>
          </div>
        </div>
      </div>

    </div>
    

    <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"header_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "header_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "green",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
  </div>

  

