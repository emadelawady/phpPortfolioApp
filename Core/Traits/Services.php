<?php 

namespace Core\Traits;
use Core\App;
use Core\routesNames;
use Core\View;

Trait Services {

    public static function redirect() {
        return new static;
     }

     public static function to($routeName){

        $name = \Core\Helper::route($routeName);

        return header("location: " . $name) . exit();


     }


    public static function abort($code='404')
    {
        http_response_code($code);

        View::blade('Pages.Abort.404');

        die();
    }

}