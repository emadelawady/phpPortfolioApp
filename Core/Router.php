<?php

namespace Core;
use App\Http\Middleware\Middleware;


class Router
{
    public static mixed $Routings = [];

    public static string $uri, $method;
    
    public mixed $parameters = [];

    public string $controller_path;

    protected mixed $routesParams = [];
    protected mixed $routesNoParams = [];

    public mixed $globalRoutes = [];
    public mixed $global = [];
    


    public function add(mixed $method, mixed $uri, mixed  $controller) {

        $this->controller_path = str_replace('/', DIRECTORY_SEPARATOR, $controller[0]);


        //will store all the parameters value in this array
        $params = [] ?? null;



        $diff = $uri;

        //finding if there is any {?} parameter in $route
        preg_match_all("/(?<={).+?(?=})/", $uri, $paramMatches);


        
            $this->routesNoParams[] = [
                'method' => $method,
                'uri' => $uri,
                'controller' => $this->controller_path,
                'action' => $controller[1],
                'middleware' => null,
                'params' =>  $params ?? [],
                'paramMatches' => $paramMatches[0],
            ];
     
            $this->routesParams[] = [
                'method' => $method,
                'uri' => $uri,
                'controller' => $this->controller_path,
                'action' => $controller[1],
                'middleware' => null,
                'params' =>  $params ?? [],
                'paramMatches' => $paramMatches[0],
            ];

            self::$uri = $uri;
            self::$method = $method;
        

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
            'params' => $this->parameters,
            'method' => self::$method,
            //'controller' => self::$controller
        ];

        return $this;
          
    }

    public function only($key){

        $this->routesNoParams[array_key_last($this->routesNoParams)]['middleware'] = $key;
        $this->routesParams[array_key_last($this->routesParams)]['middleware'] = $key;

        return $this;
        
    }


    public function route($uri, $method)
    {
        
        //will store all the parameters names in this array
        $paramKey = [] ?? null;

 
        foreach ($this->routesNoParams as $route) {

            if(empty($route['paramMatches'])){

                //replacing first and last forward slashes
                //$_REQUEST['uri'] will be empty if req uri is /

              

                if(!empty($uri)){
                    $route['uri'] = preg_replace("/(^\/)|(\/$)/","",$route['uri']);
                    $reqUri =  preg_replace("/(^\/)|(\/$)/","",$uri);

                   
                }else{
                    $reqUri = "/";
                }

                

                if($reqUri == $route['uri'] && $route['method'] === strtoupper($method)){

                    Middleware::resolve($route['middleware']);
    
                    call_user_func([
                        new $route['controller'](),
                        $route['action']
                    ]);
                    
                    return $this;

                }    

            } 
        }
       
  

    foreach ($this->routesParams as $route) {

        if(!empty($route['paramMatches'])){


            foreach($route['paramMatches'] as $in => $key){
                $paramKey[$in] = $key;
            }
   

            //replacing first and last slashes
            //$_REQUEST['uri'] will be empty if req uri is /
            if(!empty($uri)){
                $route['uri'] = preg_replace("/(^\/)|(\/$)/","",$route['uri']);
                $reqUri =  preg_replace("/(^\/)|(\/$)/","",$uri);

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


                //setting params with params names
                $route['params'][$paramKey[$key]] = $reqUri[$index] ?? false;


                //this is to create a regex for comparing route address
                $reqUri[$index] = "{.*}";


                //in case if req uri with param index is empty then return
                //because url is not valid for this route
                if(empty($reqUri[$index])){ 

                    //     // dd($indexNum);
                    return Helper::abort();
                } 

            }


            //converting array to sting
            $reqUri = implode("/",$reqUri);
          

            //replace all / with \/ for reg expression
            //regex to match route is ready !
            $reqUri = str_replace("/", '\\/', $reqUri);



            //now matching route with regex
            if(preg_match("/$reqUri/", $route['uri']) && strtoupper($method) == $route['method'])
            {

                Middleware::resolve($route['middleware']);
     
                foreach ($route['params'] as $key => $value) {
                    $_REQUEST[$key] = $value;
                }
     

                call_user_func_array([new $route['controller'](), $route['action']], $route['params']);

                return $this;

            }
        
        }
    }


  
        Helper::abort();       
    }


}
