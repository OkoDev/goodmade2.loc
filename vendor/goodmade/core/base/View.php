<?php

namespace goodmade\base;


class View{

    public $route;
    public $controller;
    public $model;
    public $view;
    public $layout;
    public $prefix;
    public $data = [];
    public $meta = [];

    public function __construct($route, $layout = '', $view = '', $meta){
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if($layout === false){
            $this->layout = false;
        }else {
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data){
       echo $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";

    }

}