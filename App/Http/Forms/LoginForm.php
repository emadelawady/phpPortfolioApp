<?php 

namespace App\Http\Forms;
use Core\Validator;

class LoginForm {

    protected $errors = [];
    public function validate($email, $password){

        if(!Validator::email($email)){

            $this->errors['email'] = 'please enter a valid email address';

        }

        if(!Validator::string($password, 7,255)){

            $this->errors['password'] = 'please enter a valid password';

        }


        return empty($this->errors);
    }

    public function errors(){
        return $this->errors;
    }

    public function error($field,$message)
    {
        return $this->errors[$field] = $message;
    }
}