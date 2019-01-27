<?php

namespace app\controllers;

use goodmade\App;

class MainController extends AppController {

    public function indexAction(){
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        $this->setMeta(App::$app->getProperty('shop_name'),'Описание...', 'Ключи');
        $name = 'TEST';
        $age = 34;
        $names = ['Gandalf', 'Qui-Gon Jinn',];
        $this->set(compact('name', 'age', 'names', 'posts'));    }


}