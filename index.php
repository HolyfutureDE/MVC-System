<?php

//Model Autoload
function autoloader($class){
    require_once(__DIR__ . '\\' . $class . '.php');
}
spl_autoload_register('autoloader');

//TODO: autoloader
require_once('./System/View/View.php');
require_once('./System/View/Handler.php');
require_once('./System/Route/Route.php');



if(isset($_GET['url'])){
    $url = $_GET['url'];
} else {
    $url = "index";
}

$route = new \System\Route\Route($url);
$route->listen();