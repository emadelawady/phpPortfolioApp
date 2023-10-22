<?php

use Core\App;
use Core\Auth;
use Core\Authenticator;
use Core\Helper;
use Core\routesNames;
use Core\Session;

function base_require($path, $file)
{
    if($path === 'root') {

        return dirname(__DIR__) . DIRECTORY_SEPARATOR . $file . '.php';
    }

    return dirname(__DIR__) . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $file . '.php';
}



function view($file, $attributes = [])
{
    extract($attributes);

    $views_path = 'App' . DIRECTORY_SEPARATOR . 'Views';

    require base_require($views_path , $file);
}

function old($key, $default = ''){
    return Session::get('old')[$key] ?? $default;
}






function route($name){
    return Helper::route($name);
}

// get_session

function get_session($key, $default = ''){
    return Session::get($key) ?? $default;
}

function logout(){

    echo "
    <form action='".'/logout'."' method='POST'>

            <input type='hidden' name='_method' value='DELETE'>
        
            <button type='submit'>Logout</button>  
            
        </form>
    ";

}

function Auth()
{
    return new Auth();
}


