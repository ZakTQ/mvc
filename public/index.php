<?php

define("APP_PATH", dirname(__DIR__));

use Core\App;

require_once APP_PATH . "/helpers.php";

function my_autoload($class)
{
    include str_replace("\\", "/", APP_PATH . "/" . $class . ".php");
}

spl_autoload_register("my_autoload");

$app = new App();
$app->run();
