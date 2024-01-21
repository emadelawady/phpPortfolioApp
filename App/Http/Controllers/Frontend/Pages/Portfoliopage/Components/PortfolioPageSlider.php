<?php

namespace App\Http\Controllers\Frontend\Pages\Portfoliopage\Components;

use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class PortfolioPageSlider extends Component
{

    const BLADE_NAME = 'frontend.portfoliopage.slider';
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        return View::make('frontend.pages.portfoliopage.components.portfolio-page-slider');

    }
}
