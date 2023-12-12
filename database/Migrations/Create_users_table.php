<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_users_table
{

    public function __construct()
    {
        $this->table();
    }
    public function table()
    {
        if (!Capsule::schema()->hasTable('users')) {

            Capsule::schema()->create('users', function (Blueprint $table) {

                $table->increments('id');

                $table->string('name');

                $table->string('email')->unique();

                $table->string('password');

                $table->string('profile_image');

                // $table->integer('user_id')->unsigned();

                $table->timestamps();


                // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            });

        }
    }

    public static function drop(){

        Capsule::schema()->drop('users');

    }
}




