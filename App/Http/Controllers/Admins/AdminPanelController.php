<?php 

namespace App\Http\Controllers\Admins;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;
use Core\Blade;
use Core\View;
 
class AdminPanelController {

    public function index(): View {

        $users = User::all();

        $portfolios_count = count(Portfolio::all());
        $services_count = count(Service::all());
        $testimonials_count = count(Testimonial::all());
        $users_count = count(User::all());

        // dd($portfolios_count);
        // dd($GLOBALS);

        return View::view('admins.admin',[
            'portfolios_count' => $portfolios_count,
            'services_count' => $services_count,
            'testimonials_count' => $testimonials_count,
            'users_count' => $users_count
        
        ]);

    }


    public function ajax($params)
    {
        dd($params);
    }

    public function faqs($params)
    {

        // dd($GLOBALS['router']);
        dd($params);
    }
}