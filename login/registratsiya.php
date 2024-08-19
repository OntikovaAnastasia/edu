<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	"register", 
	array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
		),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(
			0 => "PERSONAL_GENDER",
		),
		"SUCCESS_PAGE" => "index.php",
		"USER_PROPERTY" => array(
			0 => "UF_USER",
		),
		"USER_PROPERTY_NAME" => "UF_USER",
		"USE_BACKURL" => "Y",
		"COMPONENT_TEMPLATE" => "register"
	),
	false
);?><br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>