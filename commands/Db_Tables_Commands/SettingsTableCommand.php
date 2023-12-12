<?php

use Database\Migrations\Create_blog_table;
use Database\Migrations\Create_settings_table;
use Database\Seeders\BlogTableSeeder;
use Illuminate\Console\Command;
use App\Models\User;
use Core\App;
use Core\Database;
use Core\EloquentDatabaseForConsole;
use Illuminate\Database\Capsule\Manager as Capsule;
use Database\Migrations\Create_users_table;
use Database\Seeders\SettingsTableSeeder;
use Database\Seeders\UserSeeder;
use function Laravel\Prompts\text;
class SettingsTableCommand extends Command
{
    protected $signature = 'migrate:setting {--seed} {--drop}';
    protected $description = 'Migrate Only Blog Table --seed --drop';

    public function handle()
    {

        // initialize Illuminate database connection 
        // new EloquentDatabaseForConsole();

        // text('What is your name?');

        switch (new EloquentDatabaseForConsole()) {

            case !Capsule::schema()->hasTable('settings'):

                new Create_settings_table();

                $this->info('Migrate Settings Table Successfully!');  


                if($this->option('seed')) { new SettingsTableSeeder();$this->info('Settings Table Seeds Successfully'); }


                # code...
                break;

            case $this->option('seed'):
                new SettingsTableSeeder();

                !is_null(SettingsTableSeeder::$message) ? $this->info(SettingsTableSeeder::$message) : $this->info('Setting Table Seeds Successfully');

                break;

            case $this->option('drop'):

                Create_settings_table::drop();

                $this->info('Settings Table Drop Successfully'); 

                break;
            
            default:
                # code...
                $this->info('Settings Table Already Exists');
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