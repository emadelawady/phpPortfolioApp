<?php 

namespace App\Http\Controllers\Frontend\Pages\Aboutpage;

use Core\View;

class AboutController {
    public function index(): View
    {
        return View::blade('frontend.pages.aboutpage.about');
    }
}