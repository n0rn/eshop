<?php


class Product
{
    const SHOW_BY_DEFAULT = 10;

    public static function getProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = [];
        $result = $db->query("SELECT id, name, price, image FROM product WHERE status = '1' ORDER BY id DESC LIMIT $count");

        $i = 0;

        while($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }

        return $productsList;

    }
    
    public static function getProductListByCategory($categoryId = false)
    {
       if($categoryId) {

           $db = Db::getConnection();
           $products = [];
           $result = $db->quety("SELECT id, name, price, image FROM products WHERE status '1' AND category_id = $categotyId ORDER BY id DESC selfe::SHOW_BY_DEFAULT");

           $i = 0;
           while($row = $result->fetch()) {
               $products[$i]['id'] = $row['id'];
               $products[$i]['name'] = $row['name'];
               $products[$i]['price'] = $row['price'];
               $products[$i]['image'] = $row['image'];
               $i++;
           }
           return $products;
       }
    }

}