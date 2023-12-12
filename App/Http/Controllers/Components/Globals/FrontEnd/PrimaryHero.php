<?php

namespace App\Http\Controllers\Components\Globals\FrontEnd;

use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class PrimaryHero extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        $homepage_settings_hero = Setting::where('setting_name', '=', 'homepage_hero')->first();


        return View::make('components.globals.frontend.hero.primary', ['homepage_settings_hero' =>  $homepage_settings_hero]);

    }
}
