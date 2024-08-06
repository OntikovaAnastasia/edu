<?
use Bitrix\Main\Localization\Loc;
?>
<footer class="site-footer">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-4">
          
          <div class="mb-5">
          <?$APPLICATION->IncludeComponent(
	                  "bitrix:main.include",
	                  "",
	                  Array(
		                "AREA_FILE_SHOW" => "file",
		                "AREA_FILE_SUFFIX" => "inc",
		                "EDIT_TEMPLATE" => "",
		                "PATH" => "/include/footer_about.php"
	                    )
                    );?>
          </div>
        </div>

        
        <div class="col-lg-4 mb-5 mb-lg-0">
          
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4"><?= Loc::getMessage('Navigations')?></h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#"><?= Loc::getMessage('Home')?></a></li>
                <li><a href="#"><?= Loc::getMessage('Buy')?></a></li>
                <li><a href="#"><?= Loc::getMessage('Rent')?></a></li>
                <li><a href="#"><?= Loc::getMessage('Properties')?></a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#"><?= Loc::getMessage('About')?></a></li>
                <li><a href="#"><?= Loc::getMessage('Privacy_Policy')?></a></li>
                <li><a href="#"><?= Loc::getMessage('Contact')?></a></li>
                <li><a href="#"><?= Loc::getMessage('Terms')?></a></li>
              </ul>
            </div>
          </div>


          <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"store_v3_bottom", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "store_v3_bottom",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
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



        </div>









        
        <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent(
	                  "bitrix:main.include",
	                  "",
	                  Array(
		                "AREA_FILE_SHOW" => "file",
		                "AREA_FILE_SUFFIX" => "inc",
		                "EDIT_TEMPLATE" => "",
		                "PATH" => "/include/footer_follow.php"
	                    )
                    );?>


        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
        <?$APPLICATION->IncludeComponent(
	                  "bitrix:main.include",
	                  "",
	                  Array(
		                "AREA_FILE_SHOW" => "file",
		                "AREA_FILE_SUFFIX" => "inc",
		                "EDIT_TEMPLATE" => "",
		                "PATH" => "/include/footer_colorlib.php"
	                    )
                    );?>
        </div>

      </div>
    </div>
  </footer>

  </div>

<?
  use Bitrix\Main\Page\Asset;
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
?>

</body>

</html>