<?php

use Database\Migrations\Create_blog_table;
use Database\Migrations\Create_portfolio_table;
use Database\Migrations\Create_services_table;
use Database\Seeders\BlogTableSeeder;
use Database\Seeders\PortfolioTableSeeder;
use Database\Seeders\ServicesTableSeeder;
use Illuminate\Console\Command;
use App\Models\User;
use Core\App;
use Core\Database;
use Core\EloquentDatabaseForConsole;
use Illuminate\Database\Capsule\Manager as Capsule;
use Database\Migrations\Create_users_table;
use Database\Seeders\UserSeeder;
use function Laravel\Prompts\text;
class ServicesTableCommand extends Command
{
    protected $signature = 'migrate:service {--seed} {--drop}';
    protected $description = 'Migrate Only Portfolio Table --seed --drop';

    public function handle()
    {

        // initialize Illuminate database connection 
        // new EloquentDatabaseForConsole();

        // text('What is your name?');

        switch (new EloquentDatabaseForConsole()) {

            case !Capsule::schema()->hasTable('services'):

                new Create_services_table();

                $this->info('Migrate Services Table Successfully!');  


                if($this->option('seed')) { new ServicesTableSeeder();$this->info('Services Table Seeds Successfully'); }


                # code...
                break;

            case $this->option('seed'):
                new ServicesTableSeeder();

                !is_null(ServicesTableSeeder::$message) ? $this->info(ServicesTableSeeder::$message) : $this->info('Services Table Seeds Successfully');

                break;

            case $this->option('drop'):

                Create_services_table::drop();

                $this->info('Service Table Drop Successfully'); 

                break;
            
            default:
                # code...
                $this->info('Service Table Already Exists');
                break;
        }

        
        // if (!Capsule::schema()->hasTable('users')) {


        //     new Create_users_table();

        //     $this->info('Migrate Users Table Successfully!');  

        // }elseif($this->option('seed'))
        // {
        //     new UserSeeder();

        //     if(!is_null(UserSeeder::$message)) {

        //         $this->info(UserSeeder::$message); 
                
        //     } else{

        //         $this->info('User Table Seeds Successfully');  
        //     }

        // }elseif($this->option('drop'))
        // {
        //     Create_users_table::drop();

        //     $this->info('User Table Drop Successfully');  
        // }else{
        //     $this->info('Users Table Already Exists');  
        // }


        // User::create(['name'=>'frommirx','email'=>'edd@dd.cc','password'=>'123456']);



    }
}