<?php 

namespace App\Http\Controllers\Frontend\Pages\Servicespage;
use App\Models\User;
use Core\View;
 
class ServicesController {

    public static function index(): View
    {

        return View::blade('frontend.pages.servicespage.services');

    }
}