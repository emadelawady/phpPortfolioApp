<?php

use App\Http\Controllers\Components\Globals\Admins\DropdownUser;
use App\Http\Controllers\Components\Globals\Admins\Sidebar;
use App\Http\Controllers\Components\Globals\FrontEnd\DropdownUser as FrontEndDropdownUser;
use App\Http\Controllers\Components\Globals\Sessions\Success_with_Data;
use App\Http\Controllers\Components\Hero;
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


use Core\Blade as LocalBlade;
use Core\routesNames;

use Illuminate\Support\Facades\Blade;


LocalBlade::handle();

// define Global components

// primary Hero component
Blade::component('primary_hero', Hero::class);


// Global Admins Dropdown User component
Blade::component('globals.admins.dropdown-user', DropdownUser::class);

// Global Admins Dropdown User component
Blade::component('globals.admins.sidebar', Sidebar::class);



// Global Front End Dropdown User component
Blade::component('globals.frontend.dropdown-user', FrontEndDropdownUser::class);

// Global Front End Dropdown User component
Blade::component('globals.sessions.success-id', Success_with_Data::class);







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



Session::unflash();



// dd($GLOBALS['router']->globalRoutes);

// foreach ($GLOBALS['router']->globalRoutes as $value) {

//     dd($value);

// }


// $rou = $GLOBALS['router']->globalRoutes;

// $map = array_map(function($route){

//     return $route['name'];
  

// }, $GLOBALS['router']->globalRoutes);


// $map2 = array_map(function($r) {



//     return  strstr($r, 'admin.portfolio');

   

// }, $map);

// dd(in_array('admin.portfolio', $map));



// if(in_array('admin.portfolio', $map2))
// {

//     return true;

// }

// dd($map2);


// $arr = in_array('portfolio', $map);


// dd($GLOBALS['router']);



