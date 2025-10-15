<?php

namespace Core;


class App
{
    public static $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function getContainer()
    {
        return static::$container;
    }

    // public static function add($key,$resolve)
    // {
    //     return static::$container->add($key,$resolve);
    // }

    public static function get($key)
    {
        return static::$container->get($key);
    }

}