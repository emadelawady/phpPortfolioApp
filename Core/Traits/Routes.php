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
                  

        foreach($GLOBALS['router']->globalRoutes as $value) {

            if($name == $value['name']){


                if(!empty($args)){ 


                    $keys = array_keys($args);

                    array_map(function($in) use($keys , $value){

                        array_map(function($k) use($in, $value){


                            $uri = str_replace('{'.$k.'}', $in , $value['uri']);


                            self::$n = $uri;

                
                        },$keys);


                    },$args);


                } else{

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




    public static function is_current_route(
        mixed $route_no_args = [],
        mixed $route_args = [],
        bool $bool = false,
        string $if_true = null,
        string $if_false = null)
    {


        if(is_string($route_no_args)){

            $route_no_args = explode('"',$route_no_args);

        }

        if(is_string($route_args)){

            $route_args = explode('"',$route_args);

        }


        if(!empty($route_no_args)){

            foreach ($GLOBALS['router']->globalRoutes as $key => $value) {

                foreach ($route_no_args as $route_name) {
                    
                    if(self::route($route_name) == $_SERVER['REQUEST_URI'] && $route_name == $value['name']){
                        
                        

                        // dd($if_true);
                        // echo $if_true == 'true' ? 'true' : $if_true;
                        // return true;
                        $bool = true;

                        if($if_true == null){
                                   
                            return true;
       
                        } 


                        if(is_string($if_true) && $if_true != null){

                            echo $if_true;
                        }
                        
               
                            
                        
                    }  

                }
    
            }      
            
        }


        if(!empty($route_args)){

            foreach ($GLOBALS['router']->globalRoutes as $key => $value) {

               

                foreach ($route_args as $route_name => $values) {


                    foreach($values as $param => $val){
            
                        if(self::route($route_name, [$param => $val]) == $_SERVER['REQUEST_URI'] && $route_name == $value['name']){
                            
                            // echo $if_true == null ? 'true' : $if_true;
                            // return true;
            
                           
                            $bool = true;
            
                            if($if_true == null){
                                   
                                return true;
           
                            } 
    
    
                            if(is_string($if_true) && $if_true != null){
    
                                echo $if_true;
                            }
                                
                            
                            
                            
                            
    
                        }
                    }
                }

            }

        }

        // if($bool == true){

        //     $if_true == 'true' ? 'true' : $if_true;
            
        //     return true . print($if_true);

        // }

        if($bool != true){

            // if($if_false !== null){
            //     echo $if_false;
                
            // } 



            if($if_false == null){
                                   
                return false;

            } 


            if(is_string($if_false) && $if_false != null){

                echo $if_false;
            }
                
           

        }

        // dd($bool);

    }





    public static function in_route($name, $args = [])
    {




        if(empty($args)){

            
            $map = array_map(function($route) use($name) {



            if(self::route($name) == $_SERVER['REQUEST_URI'] && $name == $route['name']){

                // dd($route, $route['name']);
                // return $route['name'];
                return strstr($route['name'], $name);
            }
   
            }, $GLOBALS['router']->globalRoutes);


            // dd($map);

            $remove_null_values_from_array = array_filter($map, static function($var){return $var !== null;} );

            if(in_array($name, $remove_null_values_from_array))
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




    public static function is_route($name, $args = [])
    {


        if(empty($args)){

            
            $map = array_map(function($route) use($name) {



            if(self::route($name) == $_SERVER['REQUEST_URI'] && $name == $route['name']){

                // dd($route, $route['name']);
                // return $route['name'];
                return strstr($route['name'], $name);
            }
   
            }, $GLOBALS['router']->globalRoutes);


            // dd($map);

            $remove_null_values_from_array = array_filter($map, static function($var){return $var !== null;} );

            if(in_array($name, $remove_null_values_from_array))
            {

                return true;

            }

            return false;
        }


        if(!empty($args))
        {

            if(self::route($name, $args) == $_SERVER['REQUEST_URI'])
            {
                return true;
            }

            return false;

        }


    }

    public static function is_true(bool $bool, $true, $false)
    {
        echo $bool == true ? $true : $false; 
    }



}