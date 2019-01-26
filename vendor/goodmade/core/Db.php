<?php

namespace goodmade;


class Db{

    use TSingletone;

    protected function __construct(){
        $Db = require_once CONF. '/config_db.php';
    }
}