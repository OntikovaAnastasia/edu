<?php

use Bitrix\Main\Web\Json;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

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

if (empty($arResult["ALL_ITEMS"]))
	return;

\Bitrix\Main\UI\Extension::load(['ui.design-tokens']);

if (file_exists($_SERVER["DOCUMENT_ROOT"].$this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css'))
	$APPLICATION->SetAdditionalCSS($this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css');

$menuBlockId = "catalog_menu_".$this->randString();
?>

<nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">

		<ul>
		<li class="main-page"><a href="/s6/">Главная</a>
		<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>     <!-- first level-->
			<?$existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false;?>
			<?if($arResult["ALL_ITEMS"][$itemID]["PERMISSION"] == 'D') continue;?>
			<?$menu_top_class = $APPLICATION->GetDirProperty('menu_top_class' , $arResult["ALL_ITEMS"][$itemID]["LINK"]);?>

			<li>
				<a 
					href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>" <?=($menu_top_class) ? 'class="'.$menu_top_class.'"' : ''?>
				><?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?></a>
			<?if (is_array($arColumns) && !empty($arColumns)):?>
			
					<?foreach($arColumns as $key=>$arRow):?>
						<ul >
						<?$menu_top_text = $APPLICATION->GetDirProperty('menu_top_text' ,$arResult["ALL_ITEMS"][$itemID]["LINK"]);
			if($menu_top_text) echo ' <div class="menu-text">'.$menu_top_text.'</div>';
			?>
		
						<?foreach($arRow as $itemIdLevel_2=>$arLevel_3):?>  <!-- second level-->
							<?if($arResult["ALL_ITEMS"][$itemIdLevel_2]["PERMISSION"] == 'D') continue;?>
							
							<li >
								<a
								
									href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>">
									<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>
								</a>
							<?if (is_array($arLevel_3) && !empty($arLevel_3)):?>
								<ul >
								<?$menu_top_text = $APPLICATION->GetDirProperty('menu_top_text' ,$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]);
							if($menu_top_text) echo ' <div class="menu-text">'.$menu_top_text.'</div>';
							?>
								<?foreach($arLevel_3 as $itemIdLevel_3):?>	<!-- third level-->
									<li>
										<a
											href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]?>"
										>
											<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?>
										</a>
									</li>
								<?endforeach;?>
								</ul>
							<?endif?>
							</li>
						<?endforeach;?>
						</ul>
					<?endforeach;?>
				
			<?endif?>
			</li>
		<?endforeach;?>
		</ul>
		     <a href="" class="btn-close"></a>
                    </div>
                    <div class="menu-overlay"></div>
                </div>
            </div>
        </nav>
