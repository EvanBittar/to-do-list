<?php 

namespace Core;

class Session{

    public static function set($key,$value){
        $_SESSION[$key]=$value;
    }
    public static function get($key,$defult = null){
        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $defult;
    }
    public static function remove($key){
        unset($_SESSION[$key]);
    }
    public static function has($key){
        return (bool) static::get($key);
    }
    public static function flash($key, $value) {
        $_SESSION['_flash'][$key] = $value;
    }
    public static function unflash() {
            unset($_SESSION['_flash']);
}
}