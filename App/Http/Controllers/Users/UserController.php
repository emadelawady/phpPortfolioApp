<?php 

namespace App\Http\Controllers\Users;
use App\Models\User;
use Core\Blade;
use Core\Helper;
use Core\View;
 
class UserController {

    public static function index(): View
    {

        $users = User::all();

        // return View::blade('page');
        return View::view('users.index', ['users' => $users]);

    }

    public static function show(mixed $id): View|Helper
    {

        // dd($id);
        // dd($params['id']);


        $users = User::where('id', '=', $id)->get();

        $user = User::where('id', '=', $id)->first();

        if($id == $user->id){

        // dd($users);

            return View::view('users.show', ['users' => $users]);

        }

        Helper::abort();

    }

    public function slugs($params)
    {
        dd($params);
    }


    public static function create_user(mixed $name, mixed $email, mixed $password) : User
    {
        $user = User::create(['name'=>$name,'email'=>$email,'password'=>$password]);
        return $user;
    }
}