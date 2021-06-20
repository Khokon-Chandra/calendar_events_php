<?php

use controllers\HomeController;


require_once "config.php";
require_once "helpers.php";


$route->get('/',[HomeController::class,'create']);
$route->post('/',[HomeController::class,'store']);






$app->runs();







