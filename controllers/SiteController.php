<?php

include_once ROOT. '/models/Category.php';
include_once ROOT. '/models/Product.php';

class SiteController
{

    public function actionIndex()
    {
           $categories = [];
           $categories = Category::getCategoriesList();

           $products = [];
           $products = Product::getProducts(3);

        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }


    public function actionView()
    {

        return true;
    }

}
