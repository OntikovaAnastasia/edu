<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;
?>



<div class="item-wrap">
	<div class="rew-footer-carousel">

<?foreach ($arResult['ITEMS'] as $item):?>
	<div class="item">
		<div class="side-block side-opin">
			<div class="inner-block">
				<div class="title">
					<div class="photo-block">
						<img src="<?if(isset($item["PREVIEW_PICTURE"]['SRC'])):?>
							<?
							$arFile = CFile::ResizeImageGet(
								$item["PREVIEW_PICTURE"],
								array("width" => 39, "height" => 39),
								BX_RESIZE_IMAGE_PROPORTIONAL,
								false,
							);
							?>
							<?echo $arFile["src"]?>
							<?else:?>/local/templates/exam5/img/no_photo_left_block.jpg<?endif;?>" alt="">
					</div>
					<div class="name-block"><a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item["NAME"]?></a></div>
					<div class="pos-block"><?=$arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]?></div>
				</div>
				<div class="text-block">“<?echo TruncateText($item["PREVIEW_TEXT"], 150);?></div>
			</div>
		</div>
	</div>
<?endforeach;?>

	</div>
</div>	
