<?php 

namespace Core;

use Illuminate\Database\Capsule\Manager as Capsule;

class EloquentDatabaseForConsole {
    public function __construct() 
    {

        //load PHP Dot Env
        $dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();

        $capsule = new Capsule;
        $capsule->addConnection([
             'driver' => $_ENV['DB_CONNECTION'],
             'host' => $_ENV['DB_HOST'],
             'database' => $_ENV['DB_DATABASE'],
             'username' => $_ENV['DB_USERNAME'],
             'password' => $_ENV['DB_PASSWORD'],
             'charset' => $_ENV['CHARSET'],
             'collation' => 'utf8mb4_general_ci',
             'prefix' => '',
        ]);


        // $capsule->addConnection([
        //     "driver" => "mysql",
        //     "host" =>"127.0.0.1",
        //     "database" => "phpportfolioapp",
        //     "username" => "root",
        //     "password" => ""
        //     ]);

        //Make this Capsule instance available globally.
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM… 
        $capsule->bootEloquent();
        
    }
}