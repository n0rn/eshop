<?php

return array(
    // Категория товаров:
    'category/([0-9]+)' => 'category/index/$1',

    // Пользователь:
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'user/register' => 'user/register',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

    // Главная страница
    '' => 'site/index', 

);
