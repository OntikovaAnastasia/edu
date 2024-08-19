<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);
}

?>
<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">

<form class="p-5 bg-white border" name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?
if ($arResult["BACKURL"] <> '')
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">


	
	<p><?echo GetMessage("sys_forgot_pass_label")?></p>
<div class="row form-group">
<div class="col-md-12 mb-3 mb-md-0">
<div><label class="font-weight-bold" for="fullname"><?=GetMessage("sys_forgot_pass_login1")?></label></div>
	<div>	
	<input type="text" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>" class="form-control" placeholder="<?=GetMessage("sys_forgot_pass_login1")?>">
	<input type="hidden" name="USER_EMAIL" />
	</div>
		<div><label class="font-weight-bold" for="fullname"><?echo GetMessage("sys_forgot_pass_note_email")?></label></div>
</div>
</div>
	
<?if($arResult["PHONE_REGISTRATION"]):?>

	<div class="row form-group">
<div class="col-md-12 mb-3 mb-md-0">
	<label class="font-weight-bold" for="fullname"><?=GetMessage("sys_forgot_pass_phone")?></label>
	<input type="text"  name="USER_PHONE_NUMBER" value="<?=$arResult["USER_PHONE_NUMBER"]?>" class="form-control" placeholder="<?=GetMessage("sys_forgot_pass_phone")?>">
	<div><label class="font-weight-bold" for="fullname"><?echo GetMessage("sys_forgot_pass_note_phone")?></label></div>
</div>
</div>

<?endif;?>

<?if($arResult["USE_CAPTCHA"]):?>
<div class="row form-group">
<div class="col-md-12 mb-3 mb-md-0">
	<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" class="form-control">
	<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
	<label class="font-weight-bold" for="fullname"><?echo GetMessage("system_auth_captcha")?></label>
	<div><input class="form-control" type="text" name="captcha_word" maxlength="50" value="" /></div>
</div>
</div>

<?endif?>
<div class="row form-group">
	<div class="col-md-12 mb-3 mb-md-0">
	<input type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" class="btn btn-primary  py-2 px-4 rounded-0"/>
	</div>
</div>
		
</form>

<div style="margin-top: 16px">
	<p><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>
</div>

<script>
document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
document.bform.USER_LOGIN.focus();
</script>

		</div>
		</div>
	</div>
</div>