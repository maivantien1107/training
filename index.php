<?php
require __DIR__ .'/vendor/autoload.php';

use App\Controller\RouteController;
$path='training';
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS .$path);

$url = isset($_GET["url"]) ? $_GET["url"] : "/";

// echo  $_SERVER['REQUEST_URI'];

$route = new RouteController($url);
$route->show();