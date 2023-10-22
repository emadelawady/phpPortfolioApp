<?php

namespace Core;
use Core\Blade;
class View extends Blade{

    public static $file;

    public static function view($file = '', $attributes = []){

        if(!$attributes){

            static::$file = $file;
        }

        if($attributes){

            echo self::$viewFactory->make($file, $attributes)->render();
        } 

        return new static;
     
    }

    public static function with($attributes = []) {


        self::view(static::$file,attributes:$attributes);

        return new static;
        
    }

    public static function blade($file){

        echo self::$viewFactory->make($file)->render();


        return new static;
     
    }


}