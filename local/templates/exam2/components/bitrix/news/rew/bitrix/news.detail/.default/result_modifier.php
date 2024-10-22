<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->getComponent()->SetResultCacheKeys(array("NAME","PREVIEW_TEXT","COMPANY"));
$arResult["COMPANY"] = $arResult["DISPLAY_PROPERTIES"]["COMPANY"]['VALUE'];

?>