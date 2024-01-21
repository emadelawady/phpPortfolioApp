<?php 

namespace App\Http\Controllers\Frontend\Pages\Testimonialspage;
use App\Models\User;
use Core\View;
 
class TestimonialsController {

    public function index(): View
    {

        return View::blade('frontend.pages.testimonialspage.testimonials');

    }
}