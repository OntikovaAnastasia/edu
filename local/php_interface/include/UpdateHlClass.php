<?
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'UpdateHlClass', 'OnAfterUpdate');
class UpdateHlClass
{
function OnAfterUpdate(\Bitrix\Main\Entity\Event $event) {
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}
}
?>