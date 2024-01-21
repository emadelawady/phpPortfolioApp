<?php

namespace App\Http\Controllers\Frontend\Blog;

use Core\View;

class BlogController
{
    public function index()
    {
        return View::blade('frontend.blog.blog');
    }

}