<?php


class SiteController
{

    public function actionIndex()
    {
        $userEmail = '';
        $result = false;

        if(isset($_POST['subscribe'])) {
            $userEmail = $_POST['email'];

            $error = false;

            if(!User::checkEmail($userEmail)) {
                $error[] = 'Неправельный email';
            }

            if($error == false) {
            }
            $adminMail = 'judin-slavn@rambler.ru';
            $subject = 'Theme message';
            $message = 'Subscribe';
            $result = mail($adminMail, $subject, $message);
            $result = true;

        }
        
           $categories = [];
           $categories = Category::getCategoriesList();

           $products = [];
           $products = Product::getProducts(3);

           
        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    

}
