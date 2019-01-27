<?php

namespace goodmade\base;

// класс работы с данными (БД- config_db/валидация и пр.)

use goodmade\Db;
abstract class Model{

    //TODO validata
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){

        Db::instance();
    }


}