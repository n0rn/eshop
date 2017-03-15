<?php

include_once ROOT. '/models/Category.php';
include_once ROOT. '/models/Product.php';

class CategoryController
{

    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $categoryProducts = [];
        $categoryProducts = Product::getProductListByCategory($categoryId);

        require_once(ROOT . '/views/category/index.php');

        return true;
    }

    public function actionCategory($categoryId)
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $categoryProducts = [];
        $categoryProducts = Product::getProductListByCategory($categoryId);


        require_once(ROOT . '/views/category/category.php');

        return true;
    }

}