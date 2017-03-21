<?php


class CabinetController
{
    public function actionIndex()
    {
        $userID = User::checkLogged();
        $user = User::getUserById($userID);

        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }
    
    public function actionEdit()
    {
        $userID = User::checkLogged();
        $user = User::getUserById($userID);

        $fname = $user['first_name'];
        $lname = $user['last_name'];
        $password = $user['password'];

        $result= false;

        if(isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $password = $_POST['password'];

            $error = false;

            if (!User::checkFName($fname)) {
                $error[] = 'Имя не должно быть короче 3-х символов';
            }

            if (!User::checkLName($lname)) {
                $error[] = 'Имя не должно быть короче 3-х символов';
            }


            if (!User::checkPassword($password)) {
                $error[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if ($error == false) {
                $result = User::edit($userID, $fname, $lname, $password);
            }
        }

        require_once(ROOT . '/views/cabinet/edit.php');

        return true; 
    }
    
}