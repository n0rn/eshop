<?php


class CategoryController
{

    public function actionIndex($categoryId)
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $categoryProducts = [];
        $categoryProducts = Product::getProductListByCategory($categoryId);

        require_once(ROOT . '/views/category/index.php');

        return true;
    }

    
}