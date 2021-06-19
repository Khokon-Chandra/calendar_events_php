<?php
define('DB_NAME', 'calendar_contest');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define("DSN","mysql:host=".DB_HOST.";dbname=".DB_NAME);

//path
define('PATH', __DIR__);

spl_autoload_register(function($class_name){
    include_once PATH."/$class_name.php";
});

