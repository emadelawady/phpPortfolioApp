<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Forms\LoginForm;
use App\Http\Forms\UserLoginForm;
use App\Models\User;
use Core\Authenticator;
use Core\Helper;
use Core\Session;
use Core\Validation\Enums\EnumRules;
use Core\Validation\Validator as ValidationValidator;
use Core\Validator;
use Core\View;

class Login {
    
    public function index(): View
    {

        // dd($_SESSION);

        // Session::flush();

        return View::view('auth.login',[
            'errors' => Session::get('errors')
        ]);
    }

    public function store() : Helper
    {

        /*
        =
        =  NEW Validation WAY
        =
        */

        $email = $_POST['email'];
        $password = $_POST['password'];


        // dd($_POST['password']);

        $UserLoginForm = new UserLoginForm($_POST['email'], $_POST['password']);

        $validator = new ValidationValidator();

        $validator->validate($UserLoginForm,[
            'emil','password'
        ]);

        // dd($validator);

        $err = $validator->getErrors();

        // dd($err);


        // $email = $validator->check('email', $err['email']);
        // $password = $validator->check('password', $err['password']);


        // dd($email, $password);


        if(empty($err)){
            

            if((new Authenticator)->attempt($email,$password)){

                return Helper::redirect()->to('homepage');

            } else{

                $err[strtolower(EnumRules::Email->name)][] = [
                    EnumRules::WrongData->name => EnumRules::WrongData->value
                ];
                
            }

        }

        
        Session::flash('errors', $err);

        Session::flash('old', ['email' => $_POST['email']]);


        return Helper::redirect()->to('login');




        /*
        =
        =  OLD Validation WAY
        =
        */



        // $email = $_POST['email'];
        // $password = $_POST['password'];

        // //validate

        // $form = new LoginForm();

        // if($form->validate($email,$password)){

        //     if((new Authenticator)->attempt($email,$password)){

        //         return Helper::redirect()->to('homepage');
    
        //     }

        //     $form->error('email', 'No matching account found for that email address and password.');
        // }

        // Session::flash('errors', $form->errors());


        // // dd($form->errors());

        // Session::flash('old', ['email' => $_POST['email']]);


        // return Helper::redirect()->to('login');


        // return View::view('auth.login', [

        //     'errors' => $form->errors()

        // ]);


        
    }
}