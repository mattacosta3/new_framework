<?php

namespace app\core;

class App{
    
    public static  $registry=[];

    public static function bind($key, $value){
        
        static::$registry[$key]=$value;
    }

    public static function get($key){
        if(! array_key_exists($key, static::$registry)){
            return "Key does not exist";
        }
        return static::$registry[$key];
        
    }
}