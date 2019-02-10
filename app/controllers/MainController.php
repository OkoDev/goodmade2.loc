<?php

namespace app\controllers;

use goodmade\App;
use goodmade\Cache;

class MainController extends AppController {

    public function indexAction(){
        $brands = \R::find('brand','LIMIT 3');
        $hits = \R::find('product',"hit = '1' AND status = '1' LIMIT 8");
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключи');
        $this->set(compact('brands', 'hits'));
    }
}