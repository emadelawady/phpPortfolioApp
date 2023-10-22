<?php 

namespace App\Http\Controllers\Admins;

use Core\View;

class ProfileShow {

    public function index($params){

        // dd($params);

        return View::view('admins.ProfileShow')->with(['params' => $params]);
    }
}