<?php


class UserController
{

    public function actionRegister()
    {
        $fname = '';
        $lname = '';
        $email = '';
        $password = '';
        $result = false;


        if(isset($_POST['submit'])) {
         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $email = $_POST['email'];
         $password = $_POST['password'];

            $error = false;

            if(!User::checkFName($fname)) {
                $error[]= 'Имя не должно быть короче 3-х символов';
            }

            if(!User::checkLName($lname)) {
                $error[]= 'Имя не должно быть короче 3-х символов';
            }

            if(!User::checkEmail($email)) {
                $error[]= 'Неправельный  email';
            }

            if(!User::checkPassword($password)) {
                $error[]= 'Пароль не должен быть короче 6-ти символов';
            }

            if(User::checkEmailExists($email)) {
                $error[]= 'Такой пароль уже используется';
            }

            if($error == false) {
                $result = User::register($fname, $lname, $email, $password);
            }
        }

        require_once(ROOT . '/views/user/register.php');
        
        return true;
    }
    
    public function  actionLogin()
    {
        $email = '';
        $password = '';
        $result = false;


        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $error = false;

            if(!User::checkEmail($email)) {
                $error[]= 'Неправильный email';
            }
            if(!User::checkPassword($password)) {
                $error[] = 'Пароль не должен быть короче 6-ти символов';
            }

            $userID = User::checkUserData($email, $password);

            if($userID == false) {
                $error[]= 'Неправильные данные для входа на сайт';
            }else{
                User::auth($userID);
                header("Location: /cabinet/");
            }
        }
        require_once(ROOT . '/views/user/login.php');

        return true;
    }

    public function actionLogout()
    {
        session_start();
        unset($_SESSION["user"]);
        header("Location: /");
    }
}