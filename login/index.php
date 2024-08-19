<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect($_REQUEST["backurl"]);
}

$APPLICATION->SetTitle("Авторизация");
?><p>Вы зарегистрированы и успешно авторизовались.</p>

<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>

<?if($USER->IsAuthorized()):?>
<a href="/?logout=yes&<?=bitrix_sessid_get()?>">Выйти</a>
<?endif?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>




