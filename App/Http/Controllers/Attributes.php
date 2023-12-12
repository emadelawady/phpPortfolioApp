<?php 

declare(strict_types=1);

namespace App\Http\Controllers;

use Core\DTO\UserRegistration;
use Core\Validation\Validator;

class Attributes
{
    public function index()
    {
        $user_registraion = new UserRegistration('', 'notem-dd');

        $validator = new Validator();

        $validator->validate($user_registraion,['test']);

        $errors = $validator->getErrors();


        dd($errors);


        // dd($user_registraion);
    }
}