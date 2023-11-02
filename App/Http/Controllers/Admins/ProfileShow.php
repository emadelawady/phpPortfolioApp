<?php 

namespace App\Http\Controllers\Admins;

use Core\View;

class ProfileShow {

    public function index(mixed $slug, $id) {

        // dd($slug, $id);

        return View::view('admins.ProfileShow',['id' => $id, 'slug' => $slug]);
    }
}