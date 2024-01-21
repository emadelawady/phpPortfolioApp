<?php 

namespace Core\Traits;
use Core\App;
use Core\routesNames;
use Core\View;

Trait Services {

    public static function redirect() {
        return new self;
     }

     public static function to($routeName, $args = []){

        $name = \Core\Helper::route($routeName, $args);

        header("location: " . $name);
        exit();


     }

     public static function with($data = []){

        return $data;

        // return new static;
     }


    public static function abort($code='404')
    {
        http_response_code($code);

        View::blade('404');

        die();
    }

}