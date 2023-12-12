<?php 

namespace Core;

use Illuminate\Database\Capsule\Manager as Capsule;

class EloquentDatabase {
    public function __construct() 
    {

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


        //Make this Capsule instance available globally.
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM… 
        $capsule->bootEloquent();
        
    }
}