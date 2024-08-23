<?
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'AddHlClass', 'OnAfterAdd'); 

class AddHlClass
{
function OnAfterAdd(\Bitrix\Main\Entity\Event $event) {
$taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
$taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}
}
?>