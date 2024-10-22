<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?><?
use Bitrix\Main\Localization\Loc;
?> <br>
 <br>
 <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"",
	
Array()
);?><br>
 <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"COMPONENT_TEMPLATE" => "auth",
		"FORGOT_PASSWORD_URL" => "/login/",
		"PROFILE_URL" => "/lichnyy-kabinet-prodavtsa/index.php",
		"REGISTER_URL" => "/login/registratsiya.php",
		"SHOW_ERRORS" => "N"
	)
);?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form",
	"",
	Array(
		"AUTH_FORGOT_PASSWORD_URL" => "",
		"AUTH_REGISTER_URL" => "",
		"AUTH_SUCCESS_URL" => "index.php"
	)
);?><br>
 <a href="/?logout=yes&<?=bitrix_sessid_get()?>"> Выйти </a><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>