<?php

namespace App\Http\Controllers\Backend\Components;

use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class Footer extends Component
{

    const BLADE_NAME = 'backend.footer';
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        return View::make('backend.components.footer');

    }
}
