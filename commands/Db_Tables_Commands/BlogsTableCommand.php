<?php

namespace Commands\Db_tables_Commands;


use Database\Migrations\Create_blog_table;
use Database\Seeders\BlogTableSeeder;
use Illuminate\Console\Command;
use App\Models\User;
use Core\App;
use Core\Database;
use Core\EloquentDatabaseForConsole;
use Illuminate\Database\Capsule\Manager as Capsule;
use Database\Migrations\Create_users_table;
use Database\Seeders\UserSeeder;
use function Laravel\Prompts\text;
class BlogsTableCommand extends Command
{
    protected $signature = 'migrate:blog {--seed} {--drop}';
    protected $description = 'Migrate Only Blog Table --seed --drop';

    public function handle()
    {

        // initialize Illuminate database connection 
        // new EloquentDatabaseForConsole();

        // text('What is your name?');

        switch (new EloquentDatabaseForConsole()) {

            case !Capsule::schema()->hasTable('blogs'):

                new Create_blog_table();

                $this->info('Migrate Blog Table Successfully!');  


                if($this->option('seed')) { new BlogTableSeeder();$this->info('Blog Table Seeds Successfully'); }


                # code...
                break;

            case $this->option('seed'):
                new BlogTableSeeder();

                !is_null(BlogTableSeeder::$message) ? $this->info(BlogTableSeeder::$message) : $this->info('Blog Table Seeds Successfully');

                break;

            case $this->option('drop'):

                Create_blog_table::drop();

                $this->info('Blog Table Drop Successfully'); 

                break;
            
            default:
                # code...
                $this->info('Blog Table Already Exists');
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