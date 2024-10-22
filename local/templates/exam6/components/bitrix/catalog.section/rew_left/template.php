<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */



?>
 <div class="item-wrap">
 <div class="rew-footer-carousel">
<?foreach ($arResult['ITEMS'] as $item):?>
<div class="item">
	<div class="side-block side-opin">
		<div class="inner-block">
			<div class="title">
				<div class="photo-block">
					<img src="<?if (isset($item["PREVIEW_PICTURE"]["SRC"])):?>
				
						<?
							$arFile = CFile::ResizeImageGet(
								$item["PREVIEW_PICTURE"],
								array("width" => 39, "height" => 39),
								BX_RESIZE_IMAGE_PROPORTIONAL,
								false,
							);
							?>
							<?echo $arFile["src"]?>
					
					<?else:?>/local/templates/exam6/img/no_photo_left_block.jpg<?endif;?>" alt="">
					
						
					
				</div>
				<div class="name-block"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?=$item["NAME"]?></a></div>
				<div class="pos-block"><?=$item["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]?> ,<?=$item["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]?></div>
			</div>
			<div class="text-block"><?echo TruncateText($item["PREVIEW_TEXT"], 150);?></div>
		</div>
	</div>
</div>
<?endforeach;?>
</div>
</div>

