<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
		  <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "contact_form", Array(
				"EMAIL_TO" => "a.ontikova11@mail.ru",	// E-mail, на который будет отправлено письмо
					"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
						0 => "7",
					),
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
					"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
						0 => "NAME",
						1 => "EMAIL",
						2 => "MESSAGE",
					),
					"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
				),
				false
			);?>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "/include/kontakty.php"
				)
				);?>
            </div>
            
          </div>
        </div>
      </div>
    </div>

	
        
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>