<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?>

<?
use Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
echo Loc::getMessage("SOMETHING_LANGUAGE_CONSTANT"); 
?>
    <div class="site-section border-bottom">
      <div class="container">
        <div class="row align-items-center">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "/include/company.php"
				)
			);?>
        </div>
      </div>
    </div>
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>