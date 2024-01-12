<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Forms\RegisterForm;
use App\Http\Forms\UserRegisterForm;
use App\Models\User;
use Core\Helper;
use Core\View;
use Core\Validation\Validator as ValidationValidator;
use Core\Session;
use Core\Validation\Enums\EnumRules;


class Register {
    protected string $name,$email,$password;
    public function index(): View
    {
        return View::view('auth.register',[
            'errors' => Session::get('errors')
        ]);
    }

    public function store(): View|Helper
    {

        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];


        /*
        =
        =  NEW Validation WAY
        =
        */



        $UserRegisterForm = new UserRegisterForm($_POST['name'],$_POST['email'], $_POST['password']);

        $validator = new ValidationValidator();

        $validator->validate($UserRegisterForm,[
            'emil','password'
        ]);

        // dd($validator);

        $err = $validator->getErrors();

        // dd($err);


        if(empty($err)){

            $user = User::where('email', '=', $this->email)->exists();

            if($user) {
    
                $errors[EnumRules::AlreadyExists->name] = EnumRules::AlreadyExists->value;

                return View::view('auth.register', ['errors' => $errors]);
    
            } else{
    
                User::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => password_hash($this->password, PASSWORD_DEFAULT)
                ]);
    
                $_SESSION['user'] = [
                    'name' => $this->name,
                    'email' => $this->email
                ];
    
                return Helper::redirect()->to('homepage');
            }


        }



        Session::flash('errors', $err);


        // dd($_SESSION);

        Session::flash('old', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
        ]);


        return Helper::redirect()->to('register');



        // dd($err);





        /*
        =
        =  OLD Validation WAY
        =
        */


        // $form = new RegisterForm();

        // if(!$form->validate($this->name,$this->email,$this->password)){

        //     return View::view('auth.register', ['errors' => $form->errors()]);

        // }


        // $user = User::where('email', '=', $this->email)->exists();

        // if($user) {

        //     $errors['already_exists'] = 'this account is already exists, ';
        //     return View::view('auth.register', ['errors' => $errors]);

        // } else{

        //     User::create([
        //         'name' => $this->name,
        //         'email' => $this->email,
        //         'password' => password_hash($this->password, PASSWORD_DEFAULT)
        //     ]);

        //     $_SESSION['user'] = [
        //         'name' => $this->name,
        //         'email' => $this->email
        //     ];

        //     return Helper::redirect()->to('homepage');
        // }


        
    }
}