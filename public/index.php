<?php


use Core\RegisteredComponents;
use Spatie\Ignition\Ignition;
use Core\Router;


// This would be your framework default bootstrap file

// During dev, this file would be hit when accessing your local host, like:
// http://vite-php-setup.test

// require_once __DIR__ . '/helpers.php';

// use Illuminate\Container\Container;
// use Illuminate\Events\Dispatcher;
// use Illuminate\Console\Application;
// 

session_start();

require dirname(__DIR__) . '/Core/Functions.php';


require dirname(__DIR__) . '/vendor/autoload.php';

require dirname(__DIR__) . '/Bootstrap/bootstrap.php';



//load PHP Dot Env
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// Error Handler
Ignition::make()->register();

use Core\routesNames;



// define Global components
(new RegisteredComponents())->boot();





use Core\EloquentDatabase;
use Core\Ro;
use Core\Session;

// initialize Illuminate database connection 
new EloquentDatabase();






// declare Router before Bootstrap file to attach route name to contianer
$router = new Router();

$routes = require base_require('routes', 'web');



$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);



Session::unflash();

