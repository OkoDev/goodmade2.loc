<?php

namespace app\controllers;


class ProductController extends AppController{

    public function viewAction(){
        $alias = $this->route['alias'];
        $product = \R::findOne('product', "alias = ? AND status = '1'", [$alias]);
        if(!$product){
            throw new \Exception('Страница не найдена',404);
        }

// хлебные крошки
        $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);

// запись в куки?
        $p_model = new Product();
        $p_model->setRecentlyViewed($product->id);

        //todo просмотренные
        //todo связанные товары

        $related = \R::getAll("SELECT * FROM related_product 
                                JOIN product 
                                ON product.id = related_product.related_id 
                                WHERE related_product.product_id = ?",
                               [$product->id]);
//        debug($related);
        //todo галерея
        $gallery = \R::findAll('gallery','product_id = ?',[$product->id]);
        debug($gallery);

        //todo модификации товара

        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product','related', 'gallery'));
    }
}