<?php

function __autoload($class_name)
{
    $arr_paths = [
        '/models/',
        '/components/'
    ];

    foreach($arr_paths as $path) {
        $path = ROOT. $path .$class_name .'.php';
        if(is_file($path)) {
            include_once $path;
        }
    }
}