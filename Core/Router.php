<?php

namespace Core;
use App\Http\Middleware\Middleware;


class Router
{
    public static $Routings = [];

    public static string $uri, $method;
    
    public $parameters = [];

    public $fix_controller_separator;

    protected $routes = [];

    public $globalRoutes = [];
    


    public function add($method, $uri, $controller){

    $this->fix_controller_separator = str_replace('/', DIRECTORY_SEPARATOR, $controller);

        //will store all the parameters value in this array
        $params = [];

        //will store all the parameters names in this array
        $paramKey = [];

        //finding if there is any {?} parameter in $route
        preg_match_all("/(?<={).+?(?=})/", $uri, $paramMatches);


            $this->routes[] = [
                'method' => $method,
                'uri' => $uri,
                'controller' => $this->fix_controller_separator,
                'middleware' => null,
                'params' =>  $params ?? [],
                'paramMatches' => $paramMatches,
            ];


        self::$uri = $uri;
        $this->parameters = $paramMatches[0];

        return $this;

    }


    public function get($uri, $controller){      
        return $this->add('GET', $uri, $controller);
    }


    public function post($uri, $controller){
        return $this->add('POST', $uri, $controller);
    }


    public function delete($uri, $controller){
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller){
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller){
        return $this->add('PUT', $uri, $controller);
    }

    public function name($name){


        $this->globalRoutes[] = [
            'name' => $name,
            'uri' => self::$uri,
            'params' => $this->parameters
            // 'method' => self::$method,
            //'controller' => self::$controller
        ];

        return $this;
          
    }

    public function only($key){

        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
        
    }


    public function route($uri, $method)
    {

     
        // dd($this->routes);
        foreach ($this->routes as $route) {


            Middleware::resolve($route['middleware']);



            if($route['uri'] === $uri && $route['method'] === strtoupper($method)) {


                
                if(empty($route['paramMatches'][0])){

                    //replacing first and last forward slashes
                    //$_REQUEST['uri'] will be empty if req uri is /

                    if(!empty($_REQUEST['uri'])){
                        $route['uri'] = preg_replace("/(^\/)|(\/$)/","",$route['uri']);
                        $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
                    }else{
                        $reqUri = "/";
                    }

                    if($reqUri == $route['uri']){

                        // Middleware::resolve($route['middleware']);
                        $route['params'] = [];

                    $path = $route['controller'][0];
                    $action = $route['controller'][1];
    
                    $classPath = "\App\Http\Controllers\\$path";
    
                    $initClass = new $classPath();
    
                    return $initClass->$action();

                    }    

                }



            }



            //setting parameters names
            foreach($route['paramMatches'][0] as $key){
                $paramKey[] = $key;
            }

           

            //replacing first and last slashes
            //$_REQUEST['uri'] will be empty if req uri is /
            if(!empty($_REQUEST['uri'])){
                $route['uri'] = preg_replace("/(^\/)|(\/$)/","",$route['uri']);
                $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
            }else{
                $reqUri = "/";
            }

            //exploding route address
            $_uri = explode("/", $route['uri']);
            

            //will store index number where {?} parameter is required in the $route 
            $indexNum = []; 

            //storing index number, where {?} parameter is required with the help of regex
            foreach($_uri as $index => $param){
                if(preg_match("/{.*}/", $param)){
                    $indexNum[] = $index;
                }
            }

            //exploding request uri string to array to get
            //the exact index number value of parameter from $_REQUEST['uri']
            $reqUri = explode("/", $reqUri);

            //running for each loop to set the exact index number with reg expression
            //this will help in matching route
            foreach($indexNum as $key => $index){
            
                //in case if req uri with param index is empty then return
                //because url is not valid for this route
                if(empty($reqUri[$index])){
                    return;
                }
                
                //setting params with params names
                $route['params'][$paramKey[$key]] = $reqUri[$index];


                //this is to create a regex for comparing route address
                $reqUri[$index] = "{.*}";
            }


            //converting array to sting
            $reqUri = implode("/",$reqUri);

            //replace all / with \/ for reg expression
            //regex to match route is ready !
            $reqUri = str_replace("/", '\\/', $reqUri);


            //now matching route with regex
            if(preg_match("/$reqUri/", $route['uri']) && $route['method'] === strtoupper($method))
            {

                $path = $route['controller'][0];
                $action = $route['controller'][1];

                $classPath = "\App\Http\Controllers\\$path";

                $initClass = new $classPath();

                return $initClass->$action($route['params']);

            }

    
     
        

        }

        Helper::abort();


                

        
    }


}
