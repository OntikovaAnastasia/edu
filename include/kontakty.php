<?
use Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
echo Loc::getMessage("SOMETHING_LANGUAGE_CONSTANT"); 
?>

<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">

<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
	)
);?>

</div>
<div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
    <div class="site-section-title mb-3">
     <h2><?=Loc::getMessage('Kontakty')?></h2>
    </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus in cum odio.</p>
            <p>Illum repudiandae ratione facere explicabo. Consequatur dolor optio iusto, quos autem voluptate ea? Sunt laudantium fugiat, mollitia voluptate? Modi blanditiis veniam nesciunt architecto odit voluptatum tempore impedit magnam itaque natus!</p>
</div>