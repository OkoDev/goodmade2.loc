<?php

namespace app\controllers;

use goodmade\App;

class MainController extends AppController {

//    public $layout = 'test';

    public function indexAction(){
//        $this->layout = 'test';
//        echo __METHOD__;

        $this->setMeta(App::$app->getProperty('shop_name'),'Описание...', 'Ключи');
        $this->set(['']);
    }


}