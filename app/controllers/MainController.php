<?php

namespace app\controllers;

use goodmade\App;
use goodmade\Cache;

class MainController extends AppController {

    public function indexAction(){
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        $this->setMeta(App::$app->getProperty('shop_name'),'Описание...', 'Ключи');
        $name = 'TEST';
        $age = 34;
        $names = ['Gandalf', 'Qui-Gon Jinn',];
        $cache = Cache::instance();
//        $cache->set('test',$names);
        $data =$cache->get('test');
        debug($data);
        $this->set(compact('name', 'age', 'names', 'posts'));    }


}