<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_services_table
{

    public function __construct()
    {
        $this->table();
    }
    public static function table()
    {
        if (!Capsule::schema()->hasTable('services')) {

            Capsule::schema()->create('services', function (Blueprint $table) {

                $table->increments('id');
                $table->string('name');
                $table->text('description');
                $table->text('link');
                $table->string('skills');
                $table->integer('user_id');
                $table->string('featured_image');
                $table->timestamps();

            });

        }
    }

    public static function drop(){

        Capsule::schema()->drop('services');

    }
}




