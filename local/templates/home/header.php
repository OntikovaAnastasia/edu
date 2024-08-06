<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<?
use Bitrix\Main\Localization\Loc;
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
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/logo.php"
	)
);?>
            </h1>
          </div>
          
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html"><?= Loc::getMessage('Home')?></a>
                </li>
                <li class="has-children">
                  <a href="properties.html"><?= Loc::getMessage('Properties')?></a>
                  <ul class="dropdown">
                    <li><a href="#"><?= Loc::getMessage('Buy')?></a></li>
                    <li><a href="#"><?= Loc::getMessage('Rent')?></a></li>
                    <li><a href="#"><?= Loc::getMessage('Lease')?></a></li>
                    <li class="has-children">
                      <a href="#"><?= Loc::getMessage('Menu')?></a>
                      <ul class="dropdown">
                        <li><a href="#"><?= Loc::getMessage('Menu_One')?></a></li>
                        <li><a href="#"><?= Loc::getMessage('Menu_Two')?></a></li>
                        <li><a href="#"><?= Loc::getMessage('Menu_Three')?></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html"><?= Loc::getMessage('Blog')?></a></li>
                <li><a href="about.html"><?= Loc::getMessage('About')?></a></li>
                <li><a href="contact.html"><?= Loc::getMessage('Contact')?></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"catalog_horizontal_old", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "catalog_horizontal_old",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "yellow",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?><br>
