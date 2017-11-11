<?php

$page_vars = array(
    "page" => $page,
    "tabs" => $tabs
);

$module->displayPage("templates/index.tpl", $page_vars);
