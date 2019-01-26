<?php

namespace goodmade\base;

// класс работы с данными (БД- config_db/валидация и пр.)
//TODO config_db

abstract class Model{

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){

    }


}