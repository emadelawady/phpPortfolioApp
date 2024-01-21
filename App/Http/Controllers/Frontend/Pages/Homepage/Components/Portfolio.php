<?php

namespace App\Http\Controllers\Frontend\Pages\Homepage\Components;

use App\Models\Portfolio as ModelsPortfolio;
use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class Portfolio extends Component
{
    const BLADE_NAME = 'frontend.homepage.portfolio';
    
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        $portfolios = ModelsPortfolio::all()->take(5);

        return View::make('frontend.pages.homepage.components.portfolio')->with('portfolios', $portfolios);

    }
}
