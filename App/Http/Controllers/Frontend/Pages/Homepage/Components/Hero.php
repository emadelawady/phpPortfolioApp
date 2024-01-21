<?php

namespace App\Http\Controllers\Frontend\Pages\Homepage\Components;

use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class Hero extends Component
{
    const BLADE_NAME = 'frontend.homepage.hero';

    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        $homepage_settings_hero = Setting::where('setting_name', '=', 'homepage_hero')->first();


        return View::make('frontend.pages.homepage.components.hero', ['homepage_settings_hero' =>  $homepage_settings_hero]);

    }
}
