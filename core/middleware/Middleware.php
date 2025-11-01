<?php

namespace Core\middleware;

class Middleware{
    const MAP =[
        'guest' => Guest::class,
        'auth' => Auth::class
    ];
    public static function resolve($key){
        if (!$key) return;
        if(array_key_exists($key, self::MAP)){
            $m = Middleware::MAP[$key];
            (new $m)->handle();
        }
    }
}