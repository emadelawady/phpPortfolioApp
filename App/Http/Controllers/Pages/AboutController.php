<?php 

namespace App\Http\Controllers\Pages;

use Core\View;

class AboutController {
    public function index(): View
    {
        return View::blade('pages.about');
    }
}