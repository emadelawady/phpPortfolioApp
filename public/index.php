<?php

use Core\App;
use Core\GetNow;
use Core\Helper;
use Spatie\Ignition\Ignition;
use Core\Router;

session_start();

require dirname(__DIR__) . '/Core/Functions.php';

require dirname(__DIR__) . '/vendor/autoload.php';


require dirname(__DIR__) . '/Bootstrap/bootstrap.php';


//load PHP Dot Env
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// Error Handler
Ignition::make()->register();


use Core\Blade;
use Core\routesNames;

Blade::handle();





use Core\EloquentDatabase;
use Core\Ro;
use Core\Session;

// initialize Illuminate database connection 
new EloquentDatabase();






// declare Router before Bootstrap file to attach route name to contianer
$router = new Router();

$routes = require base_require('Routes', 'Web');



$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);



// require dirname(__DIR__) . '/Core/router_functions.php';


// $get_now = new GetNow($router->globalRoutes);

// dd($helper->test());

// dd($get_now->fa());

// dd($router->globalRoutes);

// dd(dirname(__DIR__) . '/Routes/Web.php');
// $routes = require dirname(__DIR__) . '/Routes/Web.php';


// dd($router->globalRoutes);

// $router->run();


Session::unflash();


// dd($_SESSION);

// dd($_REQUEST, $_SERVER, $params);
// $globalRouter = new GlobalRouter();


// dd($globalRouter);

// dd($GLOBALS['router']);
// Core\Helper::route('fooname');
