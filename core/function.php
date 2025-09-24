<?php

function view($name,$data=[]){
    extract($data);
    require base_path("view/$name");
}

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}
function isURL($value){
    return $_SERVER['REQUEST_URI'] == $value ;
}

function IsDone($value):bool{
    return $value;
}

function base_path($path){
    return __DIR__ . '/../' . $path;
}
