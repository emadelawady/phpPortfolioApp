<?php 

namespace App\Http\Controllers\Pages;
use App\Models\User;
use Core\View;
 
class TestimonialsController {

    public function index(): View
    {

        // dd($GLOBALS);

        return View::blade('pages.testimonials');

    }
}