<?php

require_once("../../global/library.php");

use FormTools\Modules;

$module = Modules::initModulePage("admin");
$L = $module->getLangStrings();

$page = Modules::loadModuleField("hello_tabs", "page", "tab", "tab1");

// define the Image Manager tabs
$tabs = array(
    "tab1" => array(
        "tab_label" => $L["phrase_tab1"],
        "tab_link" => "{$_SERVER["PHP_SELF"]}?page=tab1"
    ),
    "tab2" => array(
        "tab_label" => $L["phrase_tab2"],
        "tab_link" => "{$_SERVER["PHP_SELF"]}?page=tab2"
    ),
    "tab3" => array(
        "tab_label" => $L["phrase_tab3"],
        "tab_link" => "{$_SERVER["PHP_SELF"]}?page=tab3"
    )
);


// load the appropriate code pages
switch ($page) {
	case "tab1":
		require_once("tab1.php");
		break;
	case "tab2":
		require_once("tab2.php");
		break;
	case "tab3":
		require_once("tab3.php");
		break;
	default:
		require_once("tab1.php");
		break;
}
