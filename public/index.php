<?php

//var_dump($_SERVER['QUERY_STRING']);
require_once dirname(__DIR__).'/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \goodmade\App();

//throw new Exception('Страница на найдена', 404);