<?php 

namespace Core;

class Session{

    public static function set($key,$value){
        $_SESSION[$key]=$value;
    }
    public static function get($key){
        return $_SESSION[$key];
    }
    public static function remove($key){
        unset($_SESSION[$key]);
    }
    
}