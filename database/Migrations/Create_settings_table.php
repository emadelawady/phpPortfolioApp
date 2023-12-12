<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_settings_table
{

    public function __construct()
    {
        $this->table();
    }
    public static function table()
    {
        if (!Capsule::schema()->hasTable('settings')) {

            Capsule::schema()->create('settings', function (Blueprint $table) {

                $table->increments('id');
                $table->string('setting_name');
                $table->string('head_one');
                $table->string('head_two');
                $table->string('description_one');
                $table->string('description_two');
                $table->string('custom_link_one');
                $table->string('custom_link_two');
                $table->string('custom_link_three');
                $table->string('custom_link_four');
                $table->string('custom_field_one');
                $table->string('custom_field_two');
                $table->string('custom_field_three');
                $table->string('custom_field_four');
                $table->string('custom_field_five');
                $table->string('custom_field_six');
                $table->string('custom_field_seven');
                $table->string('custom_field_eight');
                $table->string('feature_image_one');
                $table->string('feature_image_two');
                $table->timestamps();

            });

        }
    }

    public static function drop(){

        Capsule::schema()->drop('settings');

    }
}




