<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->AddChainItem($APPLICATION->GetTitle());?>
 <?$APPLICATION->IncludeComponent(
	"mcart:agents.list", 
	".default", 
	array(
		"AGENTS_COUNT" => "1",
		"CACHE_FILTER" => "N",
		"CACHE_TIME" => "259200",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"HLBLOCK_TNAME" => "realtor"
	),
	false
);?>
    
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>