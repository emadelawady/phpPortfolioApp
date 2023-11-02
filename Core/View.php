<?php declare(strict_types = 1);


namespace Core;
use Core\Blade;
class View extends Blade {

    public static $file;
    public static $attributes = [];

    public static function view($file = '', $attributes = []){

        if(empty($attributes)){

            static::$file = $file;
        }else{

            echo self::$viewFactory->make($file, $attributes)->render();
        } 

        return new self;
     
    }

    public static function with($key, $value) {

        self::$attributes[$key] = $value;

        self::view(static::$file,attributes:self::$attributes);

        return new self;
        
    }

    public static function blade($file){

        echo self::$viewFactory->make($file)->render();


        return new self;
     
    }


}