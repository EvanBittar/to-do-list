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

function abort($code=404){
    http_response_code(404);
    
    require base_path("view/{$code}.php");
    
    die();
}

function location($path){
    header("location: {$path}");
    exit;
}

function check ($p1,$p2){
    if($p2 == null)
        return false;
    return $p1 == $p2;
}
