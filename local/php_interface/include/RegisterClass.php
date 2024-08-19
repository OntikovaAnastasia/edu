<?

AddEventHandler("main", "OnBeforeUserRegister", Array("RegisterClass", "OnBeforeUserRegisterHandler"));
class RegisterClass
{

	public static function OnBeforeUserRegisterHandler(&$arFields)
	{

		if ($arFields["UF_USER"] == 5)
		{
			$arFields["GROUP_ID"][] = 7;    
		}
        if ($arFields["UF_USER"] == 6)
		{

			$arFields["GROUP_ID"][] = 6;    
		}
	}
}
?>