<?php 

namespace Core\Traits;

use Core\App;
use Core\Router;
use Core\routesNames;
use Exception;
Trait Routes {

    private static $names;
    private static $n;

    public static function routing($name, $args = []){


        self::$names = $GLOBALS['router'];


        // dd($GLOBALS);

        foreach(self::$names->globalRoutes as $value) {


        if($name == $value['name']){

            if(!empty($args)){ 

                $keys = array_keys($args);

                $uri = '';

                if(isset($keys[0]) && !isset($keys[1])){

                    $uri = str_replace('{'.$keys[0].'}', $args[$keys[0]] , $value['uri']);

                }
                
                if(isset($keys[1])){

                    $uri = str_replace(['{'.$keys[0].'}', '{'.$keys[1].'}'],[$args[$keys[0]],$args[$keys[1]]], $value['uri']);
    
                }

                if(isset($keys[2])){

                    $uri = str_replace(['{'.$keys[0].'}', '{'.$keys[1].'}', '{'.$keys[2].'}'],[$args[$keys[0]],$args[$keys[1]], $args[$keys[2]]], $value['uri']);
    
                }

                // dd($uri);

                self::$n = $uri;


            } else{
                // dd($args);
  

                self::$n = $value['uri'];

            }

        }


   
        }

    }



    
    public static function route($name, $args =[])
    {
        self::routing($name, $args);

        return self::$n;
    }



    public static function is_current_route(string $route_name = '', array $args = [])
    {

        foreach ($GLOBALS['router']->globalRoutes as $key => $value) {

            if(self::route($route_name) == $_SERVER['REQUEST_URI'] && $route_name == $value['name']){

                return true;

            }    
   
        }
       

        foreach ($args as $arg) {

            if(self::route($arg) == $_SERVER['REQUEST_URI']){
                
                return true;
              
            } 
        }       

    }


    public static function in_route($name, $args = [])
    {


        if(empty($args)){

            
            $map = array_map(function($route) use($name) {



            if(self::route($name) == $_SERVER['REQUEST_URI'] && $name == $route['name']){

                return strstr($route['name'], $name);
            }

           
            }, $GLOBALS['router']->globalRoutes);


            // dd($map);
            
            if(in_array($name, $map))
            {

                return true;

            }
        }


        if(!empty($args))
        {

            if(self::route($name, $args) == $_SERVER['REQUEST_URI'])
            {
                return true;
            }

        }


    }



}