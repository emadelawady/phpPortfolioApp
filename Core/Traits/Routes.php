<?php 

namespace Core\Traits;

use Core\App;
use Core\Router;
use Core\routesNames;
use Exception;
Trait Routes {

    private static $names;

    private static $n;

    private static $currentUri;




    public static function routing($name){

        // dd($GLOBALS);

        // $roo = new Router();

        // dd(self::$new);



        // $routesNames = App::resolve(routesNames::class);

        // dd($routesNames);


        self::$names = $GLOBALS['router'];

        // dd($GLOBALS);

        foreach (self::$names->globalRoutes as $key => $value) {


            if($name == $value['name']){

         
                self::$n = $value['uri'];
      

                }
   
        }

    }



    
    public static function route($name)
    {
        self::routing($name);

        return self::$n;
    }

    public static function is_current_route($name)
    {

        // self::$currentUri = $GLOBALS['uri']['path'];

            if(self::$currentUri === self::route($name)){
                
                return true;
              
            } 
            

    }

}