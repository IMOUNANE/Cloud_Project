<?php
require_once '../vendor/autoload.php';
//session_save_path("/tmp");
//session_start();


use CloudProject\Router;

$router = new Router();
var_dump($router);
$router->getRoute();