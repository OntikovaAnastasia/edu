<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<?
use Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(!empty($arResult["OK_MESSAGE"]))
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="p-5 bg-white border">
<?=bitrix_sessid_post()?>


	<div class="row form-group">
		<div class="col-md-12 mb-3 mb-md-0">
			<label class="font-weight-bold" for="fullname"><?=Loc::getMessage("FULL_NAME")?></label>
			<input type="text" name="user_name" id="fullname" class="form-control" placeholder="<?=Loc::getMessage("FULL_NAME")?>" value="<?=$arResult["AUTHOR_NAME"]?>">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold" for="email"><?=Loc::getMessage("FORM_EMAIL")?></label>
			<input type="email" id="email" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" class="form-control" placeholder="<?=Loc::getMessage("FORM_EMAIL")?>">
		</div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold" for="message"><?=Loc::getMessage("MESSAGE")?></label> 
			<textarea name="MESSAGE" id="message" cols="30" rows="5" class="form-control" placeholder="<?=Loc::getMessage("TEXT_MESSAGE")?>"><?=($arResult["MESSAGE"] ?? '')?></textarea>
		</div>
	</div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
<div class="row form-group">
  <div class="col-md-12">
	<input type="submit"name="submit" value="<?=GetMessage("SUBMIT")?>" class="btn btn-primary  py-2 px-4 rounded-0"value="<?=GetMessage("SUBMIT")?>">
  </div>
</div>
	
</form>

