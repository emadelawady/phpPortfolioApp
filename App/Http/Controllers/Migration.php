<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Database\Migrations\Create_blog_table;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Cache;
use App\Models\User;


class Migration
{
    public function index()
    {

        // return new Create_blog_table();


        // User::create(['name'=>'frommira','email'=>'edd@dd.cc','password'=>'123456']);

        if (!Capsule::schema()->hasTable('todos')) {

            Capsule::schema()->create('todos', function (Blueprint $table) {

                $table->increments('id');

                $table->string('todo');

                $table->string('description');

                $table->string('category');

                // $table->integer('user_id')->unsigned();

                $table->timestamps();

                // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            });

        }
        // else{
        //     echo 'test';
        // }
    }
}