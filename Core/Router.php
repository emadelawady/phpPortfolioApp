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

        // dd($controller);

    $this->controller_path = str_replace('/', DIRECTORY_SEPARATOR, $controller[0]);

    // dd($this->fix_controller_separator);

        //will store all the parameters value in this array
        $params = [] ?? null;



        $diff = $uri;

        //finding if there is any {?} parameter in $route
        preg_match_all("/(?<={).+?(?=})/", $uri, $paramMatches);

        // dd($paramMatches);
        // $this->parameters[] = $paramMatches;

        
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

        // dd($this->routesParams);

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

        // dd($this->parameters);

        // dd($this->routesNoParams);
        foreach ($this->routesNoParams as $route) {

                // dd($route['params']);
            // dd($route['paramMatches']);
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
                    // dd($route['uri']);

                Middleware::resolve($route['middleware']);

                $path = $route['controller'];
                $action = $route['action'];


                $path_find_last = substr(strrchr($path,DIRECTORY_SEPARATOR), 1);

            
                $path_delete_last = substr($path, 0, - strlen($path_find_last));


                $exp = explode(DIRECTORY_SEPARATOR,$path);

                $last = end($exp);


                $controllers_path = DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Http' . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR;

                $classPath = $controllers_path . $path_delete_last . $last;

    
                $initClass = new $classPath();
  
                call_user_func([$initClass, $action]);
                
                return $this;

                }    

            } 
        }


        // dd($this->routesParams['paramMatches']);

       
  

    foreach ($this->routesParams as $route) {

        if(!empty($route['paramMatches'])){


            foreach($route['paramMatches'] as $in => $key){
                $paramKey[$in] = $key;
            }
   
            // dd($paramKey);


            //replacing first and last slashes
            //$_REQUEST['uri'] will be empty if req uri is /
            if(!empty($uri)){
                $route['uri'] = preg_replace("/(^\/)|(\/$)/","",$route['uri']);
                $reqUri =  preg_replace("/(^\/)|(\/$)/","",$uri);

                // dd($route['uri']);
            }else{
                $reqUri = "/";
            }



            // dd($route['uri'], $slashes_uri);

            //exploding route address
            $_uri = explode("/", $route['uri']);

            // dd($_uri);

        

            //will store index number where {?} parameter is required in the $route 
            $indexNum = []; 



            // dd($indexNum);

            // dd($_uri);
            //storing index number, where {?} parameter is required with the help of regex
            foreach($_uri as $index => $param){

                if(preg_match("/{.*}/", $param)){

                    // dd(count($route['paramMatches']));
                    $indexNum[] = $index;

                }
            }
            // dd($indexNum);

          



            //exploding request uri string to array to get
            //the exact index number value of parameter from $_REQUEST['uri']
            $reqUri = explode("/", $reqUri);

            // dd($indexNum);



            //running for each loop to set the exact index number with reg expression
            //this will help in matching route
            foreach($indexNum as $key => $index){

                    

                
                // dd($paramKey[$key]);


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


            $arr_keys = array_keys($route['params']);
            $param_values = array_values($route['params']);
            $arr_values = array_values($route['paramMatches']);



            //converting array to sting
            $reqUri = implode("/",$reqUri);
          

            //replace all / with \/ for reg expression
            //regex to match route is ready !
            $reqUri = str_replace("/", '\\/', $reqUri);

            // dd($reqUri,$route['uri']);


            //now matching route with regex
            if(preg_match("/$reqUri/", $route['uri']) && strtoupper($method) == $route['method'])
            {


                Middleware::resolve($route['middleware']);

                $path = $route['controller'];
                $action = $route['action'];


                $path_find_last = substr(strrchr($path,DIRECTORY_SEPARATOR), 1);

            
                $path_delete_last = substr($path, 0, - strlen($path_find_last));


                $exp = explode(DIRECTORY_SEPARATOR,$path);

                $last = end($exp);


                $controllers_path = DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Http' . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR;

                $classPath = $controllers_path . $path_delete_last . $last;
    
                $initClass = new $classPath();


                call_user_func_array([$initClass, $action], $route['params']);



                return $this;

            }
        
        }
    }


        // }

  
        Helper::abort();       
    }


}
