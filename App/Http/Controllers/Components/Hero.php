<?php

namespace App\Http\Controllers\Components;

use App\Models\Setting;
use Closure;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        $homepage_settings_hero = Setting::where('setting_name', '=', 'homepage_hero')->first();


        return View::make('components.hero.primary', ['homepage_settings_hero' => $homepage_settings_hero]);

    }
}
