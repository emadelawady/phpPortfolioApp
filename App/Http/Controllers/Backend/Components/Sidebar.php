<?php

namespace App\Http\Controllers\Backend\Components;

use App\Models\Setting;
use App\Models\User;
use App\Models\Portfolio;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class Sidebar extends Component
{

    const BLADE_NAME = 'backend.sidebar';
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {
        // $portfolio_id = Portfolio::where('id', '>', 0)->pluck('id');
       

        $__id = explode('/',$_REQUEST['uri']);

        $current_id = end($__id);

 

        return View::make('backend.components.sidebar', ['current_id' => $current_id]);

    }
}
