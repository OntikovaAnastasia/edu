<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentParameters = array(
    "GROUPS" => [
        "DETAIL_PAGER_SETTINGS" => [
			"NAME" => GetMessage("CN_P_DETAIL_PAGER_SETTINGS"),
		],
    ],
    "PARAMETERS" => array(

        "HLBLOCK_TNAME"  =>  Array(
            "PARENT" => "BASE", //
            "NAME" => GetMessage("MCART_AGENTS_LIST_HLBLOCK_TNAME"), 
            "TYPE" => "STRING", 
            "DEFAULT" => "", 
        ),
        "CACHE_TIME"  =>  ["DEFAULT"=>259200],
    "AGENTS_COUNT" => [
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_AGENT_CONT"),
			"TYPE" => "STRING",
			"DEFAULT" => "20",
		],

    ),
    
);
