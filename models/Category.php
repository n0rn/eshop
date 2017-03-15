<?php


class Category
{

    public static function getCategoriesList()
    {
        $db = Db::getConnection();
        
        $categoryList = [];
        $result = $db->query('SELECT id, name FROM category ORDER BY product_id ASC');
        
        
        $i= 0;
        
         while($row = $result->fetch()) {
             $categoryList[$i]['id'] = $row['id'];
             $categoryList[$i]['name'] = $row['name'];
             $i++;
         }
        
        return $categoryList;
    }

}