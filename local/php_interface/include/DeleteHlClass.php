<?
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'DeleteHlClass', 'OnAfterDelete');
class DeleteHlClass
{
function OnAfterDelete(\Bitrix\Main\Entity\Event $event) {
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}
}
?>