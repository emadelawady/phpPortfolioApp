<?php 

namespace App\Http\Controllers\Users;
use App\Models\User;
use Core\Blade;
use Core\View;
 
class UserController {

    public static function index(){

        $users = User::all();

        // return View::blade('page');
        // return View::view('page')->with(['users' => $users]);
        return View::view('users.index', ['users' => $users]);

    }

    public static function show($id){

        // dd($id);


        $users = User::where('id', '=', $id)->get();

        return View::view('users.show', ['users' => $users]);
    }
    public static function create_user($name, $email, $password)
    {
        $user = User::create(['name'=>$name,'email'=>$email,'password'=>$password]);
        return $user;
    }
}