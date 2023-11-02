<?php 

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Core\View;


class HomeController {

    public function index() : View
    {

        // dd($GLOBALS);
        $homepage_settings_hero = Setting::where('setting_name', '=', 'homepage_hero')->first();

        
        return View::blade('home');

        // return View::view('home', [
        //     'homepage_settings_hero' => $homepage_settings_hero
        // ]);

    }
}