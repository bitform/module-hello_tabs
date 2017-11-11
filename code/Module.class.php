<?php

namespace FormTools\Modules\HelloTabs;

use FormTools\Module as FormToolsModule;


class Module extends FormToolsModule
{
    protected $moduleName = "Hello Tabs";
    protected $moduleDesc = "A simple \"Hello World\" module to illustrate how to implement tabs in your modules.";
    protected $author = "Ben Keen";
    protected $authorEmail = "ben.keen@gmail.com";
    protected $authorLink = "https://formtools.org";
    protected $version = "2.0.0";
    protected $date = "2017-11-11";
    protected $originLanguage = "en_us";

    protected $nav = array(
        "module_name" => array("index.php", false)
    );
}
