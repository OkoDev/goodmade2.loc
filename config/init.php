<?php

define("DEBUG",0);
define("ROOT",dirname(__DIR__));
define("WWW",ROOT . '/public');
define("APP",ROOT . '/app');
define("CORE",ROOT . '/vendor/goodmade/core');
define("LIBS",ROOT . '/vendor/goodmade/core/libs');
define("CACHE",ROOT . '/tmp/cache');
define("CONF",ROOT . '/config');
define("LAYOUT",ROOT . 'default');

//http://goodmade.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://goodmade.loc/public/
$app_path = preg_replace("#[^/]+$#",'',$app_path);
//http://goodmade.loc
$app_path = str_replace('/public/','',$app_path);

define("PATH",$app_path);
//путь к админке
define("ADMIN",PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';