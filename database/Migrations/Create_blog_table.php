<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_blog_table
{

    public function __construct()
    {
        $this->table();
    }
    public static function table()
    {
        if (!Capsule::schema()->hasTable('bolgs')) {

            Capsule::schema()->create('blogs', function (Blueprint $table) {

                $table->increments('id');
                $table->string('title');
                $table->text('content');
                $table->text('rate');
                $table->string('tags');
                $table->integer('user_id');
                $table->string('featured_image');
                $table->timestamps();

            });

        }
    }

    public static function drop(){

        Capsule::schema()->drop('blogs');

    }
}




