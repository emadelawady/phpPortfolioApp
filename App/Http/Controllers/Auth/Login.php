<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Forms\LoginForm;
use App\Models\User;
use Core\Authenticator;
use Core\Helper;
use Core\Session;
use Core\Validator;
use Core\View;

class Login {
    
    public function index()
    {
        return View::view('auth.login',[
            'errors' => Session::get('errors')
        ]);
    }

    public function store()
    {

        // dd($GLOBALS);
        $email = $_POST['email'];
        $password = $_POST['password'];

        //validate

        $form = new LoginForm();

        if($form->validate($email,$password)){


            if((new Authenticator)->attempt($email,$password)){

                return Helper::redirect()->to('homepage');
    
            }


            $form->error('email', 'No matching account found for that email address and password.');
 
        }

        Session::flash('errors', $form->errors());

        Session::flash('old', ['email' => $_POST['email']]);


        return Helper::redirect()->to('login');


        // return View::view('auth.login', [

        //     'errors' => $form->errors()

        // ]);


        
    }
}