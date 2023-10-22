<?php 

use Core\App;
use Core\Container;
use Core\Database;
use Core\routesNames;

$container = new Container();


// dd($GLOBALS['router']);


$container->bind(key: 'Core\Database', resolver: function(){ return new Database(); });


// $container->bind(key: 'Core\routesNames', resolver: function(){
//     return new routesNames($GLOBALS['router']);
// });


App::set($container);

