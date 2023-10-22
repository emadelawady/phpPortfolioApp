<?php 

declare(strict_types=1);

namespace Core;
use App\Http\Middleware\Middleware;

class Router {
    protected static $Routings = [];
    private $fix_controller_separator;

    public $globalRoutes = [];
    public $path;

    private static string $uri, $method;

    private static array $par = [];

    public $nb = [];
    private static array $controller;

    protected $routes = [];



    // public function add($method, $uri, $controller) {

    //     $this->fix_controller_separator = str_replace('/', DIRECTORY_SEPARATOR, $controller);

    //     $params = [];

    //     $this->routes[] = [
    //         'method' => $method,
    //         'uri' => $uri,
    //         'controller' => $this->fix_controller_separator,
    //         'middleware' => null,
    //         'params' =>  $params ?? [],
    //     ];

    //     self::$uri = $uri;

    //     return $this;

    // }


    public function get($uri, $controller) {
        $this->add('GET', $uri, $controller);
        return $this;
    }
    public function post($uri, $controller) {

        $this->add('POST', $uri, $controller);
        return $this;

    }
    public function delete($uri, $controller) {

        $this->add('DELETE', $uri, $controller);

        return $this;

    }

    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
        return $this;
    }

    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
        return $this;
    }

    public function name($name){


        $this->globalRoutes[] = [
            'name' => $name,
            'uri' => self::$uri,
            // 'method' => self::$method,
            //'controller' => self::$controller
        ];

        // $this->add_no_parameters(name: $name);

        // dd(self::$uri);
        return $this;
          
    }

    public function only($key){

        self::$Routings[array_key_last(self::$Routings)]['middleware'] = $key;

        return $this;
        
    }

    public function route($uri, $method){

       


           //will store all the parameters value in this array
           $params = [];

           //will store all the parameters names in this array
           $paramKey = [];
   
   
           //finding if there is any {?} parameter in $route

        //    dd(self::$uri);
           preg_match_all("/(?<={).+?(?=})/", $uri, $paramMatches);
   

   
           //if the route does not contain any param call simpleRoute();
           if(empty($paramMatches[0])){
   
               foreach ($this->routes as $route) {
                    // $this->simple($route['method'], $route['uri'], $route['controller']);

                    // dd($route['uri']);
               }
               
               return;
   
           }

        // dd(self::$Routings);


        // $route = self::$Routings[0];




                //finding if there is any {?} parameter in $route
                // preg_match_all("/(?<={).+?(?=})/", $uri, $paramMatches);



                // if($route['method'] === strtoupper($method)){

                    // Middleware::resolve($route['middleware']);


                    // $path = $route['controller'][0];
                    // $action = $route['controller'][1];
    
                    // $classPath = "\App\Http\Controllers\\$path";
    
                    // $initClass = new $classPath();  


                // if the route does not contain any param call simpleRoute();
                // if(empty($paramMatches[0])){

                   

                     
                    
                    // dd($initClass->$action());
                    // dd($route);

    
                    // dd($params['id']);

                    // return $initClass->$action();

                // }  else{

                    // dd($route);

                    // $args = $route['params'] ?? [];


                // dd($params['id']);
                // return $initClass->$action($args);

                // } 


                // }

            // if($route['method'] === strtoupper($method)){


                // apply middleware
 

                // if(!array_key_exists('query', $uri)){
                // path

                // $path = $route['controller'][0];
                // $action = $route['controller'][1];

                // $classPath = "\App\Http\Controllers\\$path";

                // $initClass = new $classPath();

                // $args = $route['params'] ?? [];


                // // dd($params['id']);
                // return $initClass->$action($args);
                // }
                
            // }
        // }

        // Helper::abort();


    }


    public function add($method, $uri, $controller) {

        //will store all the parameters value in this array
        $params = [];

        //will store all the parameters names in this array
        $paramKey = [];


        $this->fix_controller_separator = str_replace('/', DIRECTORY_SEPARATOR, $controller);


        


        
        
        //finding if there is any {?} parameter in $route
        preg_match_all("/(?<={).+?(?=})/", $uri, $paramMatches);

        //if the route does not contain any param call simpleRoute();
        if(empty($paramMatches[0])){


            
            self::$uri = $uri;


            $this->simple($method,$uri,$this->fix_controller_separator);




            return $this;
        }
        
            //setting parameters names
            foreach($paramMatches[0] as $key){
                $paramKey[] = $key;
            }
    
            //replacing first and last slashes
            //$_REQUEST['uri'] will be empty if req uri is /
            if(!empty($_REQUEST['uri'])){
                $uri = preg_replace("/(^\/)|(\/$)/","",$uri);
                $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);


            }else{

                $reqUri = "/";
            }
    

            //exploding route address
            $new_uri = explode("/", $uri);

            
    
            //will store index number where {?} parameter is required in the $route 
            $indexNum = []; 
    
            //storing index number, where {?} parameter is required with the help of regex
            foreach($new_uri as $index => $param){
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
                $params[$paramKey[$key]] = $reqUri[$index];
    
    
                //this is to create a regex for comparing route address
                $reqUri[$index] = "{.*}";
            }
    
            //converting array to sting
            $reqUri = implode("/",$reqUri);
    
            //replace all / with \/ for reg expression
            //regex to match route is ready !
            $reqUri = str_replace("/", '\\/', $reqUri);


            //now matching route with regex
            if(preg_match("/$reqUri/", $uri))
            {

                // $this->fix_controller_separator = str_replace('/', DIRECTORY_SEPARATOR, $controller);

                // $new = new routesNames($routes);
        
        
                // dd($new);
        
                // dd($routes);
        
                $path = $this->fix_controller_separator[0];
                $action = $this->fix_controller_separator[1];
        
                $classPath = "\App\Http\Controllers\\$path";
        
                $initClass = new $classPath(); 
        
        
                // dd($params);
                
                $initClass->$action($params);
        
                return $this;

    

                // $this->comp($controller, $params, $this->globalRoutes);

                // $path = $this->fix_controller_separator[0];
                // $action = $this->fix_controller_separator[1];
    
                // $classPath = "\App\Http\Controllers\\$path";
    
                // $initClass = new $classPath(); 

                // $args = $uri['params'] ?? [];

                // // dd($params);
                
                // $initClass->$action($params);

                // return $this;
                
    
            }

            

    }


    public function comp($controller, $params, $routes){

        $this->fix_controller_separator = str_replace('/', DIRECTORY_SEPARATOR, $controller);

        // $new = new routesNames($routes);


        // dd($new);

        // dd($routes);

        $path = $this->fix_controller_separator[0];
        $action = $this->fix_controller_separator[1];

        $classPath = "\App\Http\Controllers\\$path";

        $initClass = new $classPath(); 


        // dd($params);
        
        $initClass->$action($params);

        return $this;
    }

    public function simple($method, $uri, $controller){



        $request_uri = parse_url($_SERVER['REQUEST_URI'])['path'];

        $request_method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

        // dd($this->routes);



        if(!empty($request_uri)){
            $uri = preg_replace("/(^\/)|(\/$)/","",$uri);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$request_uri);
        }else{
            $reqUri = "/";
        }



        if($reqUri == $uri && $method === strtoupper($request_method)){




            $path = $controller[0];
            $action = $controller[1];

            $classPath = "\App\Http\Controllers\\$path";

            $initClass = new $classPath(); 
            
            return $initClass->$action();


        }

        return $this;

    }
    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

        $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
        
        // dd($this->globalRoutes);

        return $this->route($uri,$method);

    }
}