<?php

namespace App\Http\Controllers\Components\Globals\Admins;

use App\Models\Portfolio;
use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {        

        $portfolio_id = Portfolio::where('id', '>', 0)->pluck('id');
        
        return View::make('components.globals.admins.sidebar', ['portfolio_id' =>  $portfolio_id]);

    }
}
