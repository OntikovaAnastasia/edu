<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

$last = $arResult[array_key_last($arResult)];
$name = $last["TITLE"];

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';
$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()

$strReturn .= '<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('.SITE_TEMPLATE_PATH.'/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"><div class="container"><div class="row align-items-center justify-content-center text-center"><div class="col-md-10"> <h1 class="mb-2" >'.$name.'</h1>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	


	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
					'.$title.'
				</a><span class="mx-2 text-white">&bullet;</span>
			';
	}
	else
	{	
		$strReturn .= '
				<strong class="text-white">'.$title.'</strong>
			';
	}
	
}

$strReturn .= '</div></div></div></div>';

return $strReturn;

