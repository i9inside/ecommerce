<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

define("URL", $_SERVER['REQUEST_URI']);

$app->config('debug', true);

require_once("site.php");
require_once("functions.php");
require_once("admin-admin.php");
require_once("admin-categories.php");
require_once("admin-products.php");
require_once("admin-users.php");

$app->run();

 ?>