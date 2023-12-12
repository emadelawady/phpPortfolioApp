<?php

namespace App\Http\Controllers\Blog;

use Core\View;

class BlogController
{
    public function index()
    {
        return View::blade('blog.index');
    }

    
}