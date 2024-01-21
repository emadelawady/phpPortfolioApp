<?php

namespace App\Http\Controllers\Frontend\Components\Navbars;

use Illuminate\Support\Facades\View;
use Illuminate\View\Component;
use Illuminate\View\View as ViewView;

class SecondaryNavbar extends Component
{
    const BLADE_NAME = 'frontend.secondary.navbar';
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render(): ViewView
    {

        return View::make('frontend.components.navbars.secondary-navbar');

    }
}
