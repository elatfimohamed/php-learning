<?php
/**
 * Created by PhpStorm.
 * User: elatfi
 * Date: 26/09/18
 * Time: 16:49
 */


class App {

    private static $registry = [];

    public static function bind($key,$value)
    {
        static::$registry[$key] = $value;
    }

    public function resolve($key){
        if (!array_key_exists($key,static::$registry)) throw new Exception("No $key found in registry");
        return static::$registry[$key];
    }
}