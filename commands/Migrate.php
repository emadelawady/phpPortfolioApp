<?php

use Database\Migrations\Create_blog_table;
use Illuminate\Console\Command;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Core\EloquentDatabaseForConsole;
use function Laravel\Prompts\select;


class Migrate extends Command
{
    protected $signature = 'migrate';
    protected $description = 'Migrate All DB';


    public function handle()
    {

        $migrate = select(
            label: 'What Table should be Migrate?',
            options: [
                'all' => 'All',
                'user' => 'Users',
                'blog' => 'Blog',
                'portfolio' => 'Portfolio',
                'service' => 'Service',
                'setting' => 'Setting',
                'testimonial' => 'Testimonial',
            ],
            default: 'all',
            hint: 'The role may be changed at any time.'
        );




        switch ($migrate) {

            case 'all':

                $this->info('All');
                $this->call('migrate:users');
                $this->call('migrate:blog');
                $this->call('migrate:portfolio');
                $this->call('migrate:service');
                $this->call('migrate:setting');
                $this->call('migrate:testimonial');

                # code...
                break;

            case 'user':

                $this->call('migrate:users');
                
                break;

            case 'blog':

                $this->call('migrate:blog');

                break;

            case 'portfolio':

                $this->call('migrate:portfolio');

                break;

            case 'service':

                $this->call('migrate:service');

                break;

            case 'setting':

                $this->call('migrate:setting');

                break;

            case 'testimonial':

                $this->call('migrate:testimonial');

                break;

            
            // default:
            //     # code...
            //     $this->info('Users Table Already Exists');
            //     break;
        }

        

        // if($migrate === 'all'){

        //     $this->info('All');

        // }

        // if($migrate === 'users'){

        //     $this->call('migrate:users');

        // }

        // if($migrate === 'blog'){

        //     $this->call('migrate:blog');

        // }

        // $this->info('Mig');

        // dd($role['Member']);

        // $this->call('migrate:users');

        // initialize Illuminate database connection 
        // new EloquentDatabaseForConsole();

        // new Create_blog_table();

        // User::create(['name'=>'frommirx','email'=>'edd@dd.cc','password'=>'123456']);



        // if (!Capsule::schema()->hasTable('users_two')) {
            
        //     $this->info('DB Migrate Successfully!');  

        // }

    }

  
}