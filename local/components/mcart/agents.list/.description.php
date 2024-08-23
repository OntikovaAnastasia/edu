<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */


$arComponentDescription = array(


	"NAME" => GetMessage("IBLOCK_AGENT_LIST"),
	"DESCRIPTION" => GetMessage("IBLOCK_AGENT_LIST_DESC"),
	
	"CACHE_PATH" => "Y",
	"PATH" => array(
	"ID" => "agents",
	"NAME" => GetMessage("IBLOCK_AGENT"),
	),
);
