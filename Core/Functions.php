<?php

use Core\App;
use Core\Auth;
use Core\Authenticator;
use Core\Helper;
use Core\routesNames;
use Core\Session;
use Core\Vite;

function base_require($path, $file)
{
    if($path === 'root') {

        return dirname(__DIR__) . DIRECTORY_SEPARATOR . $file . '.php';
    }

    return dirname(__DIR__) . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $file . '.php';
}


function vite(string $entry): string
{
    $vite = new Vite();
    
    return $vite->vite($entry);
}


// function view($file, $attributes = [])
// {
//     extract($attributes);

//     $views_path = 'App' . DIRECTORY_SEPARATOR . 'Views';

//     require base_require($views_path , $file);
// }

function old($key, $default = ''){
    return Session::get('old')[$key] ?? $default;
}





function route($name, $args = []){
    return Helper::route($name, $args);
}


function is_current_route(string $route_name = '' , array $args = [])
{
    return Helper::is_current_route($route_name , $args);
}

function in_route(string $route_name = '' , array $args = [])
{
    
    return Helper::in_route($route_name, $args);

  
}

function route_css(string $route_name = '',string $if_true = '', string $if_false = '', array $args = [])
{

    echo in_route($route_name, $args) ? $if_true : $if_false;

}

function in_routes(array $names = [] , array $args = [])
{
    foreach ($names as $name) {
        return Helper::in_route($name, $args);

    }
}

function public_path($path)
{
    return Helper::public_path($path);
}


function geT_public_path()
{
    return Helper::get_public_path();
}



// get_session

function has_session($key, $default = ''){

    return Session::has($key) ?? $default;
}

function get_session($key, $default = ''){
    return Session::get($key) ?? $default;
}
function unflash_message($key, $default = ''){

    return Session::unflash_message($key) ?? $default;

}

function logout(){

    echo "<form action='".route('logout')."' method='POST'>

            <input type='hidden' name='_method' value='DELETE'>
        
            <button type='submit'>Logout</button>  
            
        </form>";

}

function Auth()
{
    return new Auth();
}





function pre()
{ ?>

<div style="
        background: #000;
        display: flex;
        color: #1fe91f;
        padding: 6px;
        font-size: 18px;
    ">
<pre style="color: unset;font-size: unset;">
    
    <?php $arr = (array) func_get_args(); ?>


    <?php if(isset($arr[0])) { ?>

    (1) _ "<?php print_r($arr[0] ?? false) . '<br>'; ?>"
    
    <?php } ?>


    <?php if(isset($arr[1])) { ?>

    (2) _ "<?php print_r($arr[1] ?? false) . '<br>'; ?>"

    <?php } ?>


    <?php if(isset($arr[2])) { ?>

    (3) _ "<?php print_r($arr[2] ?? null) . '<br>'; ?>"

    <?php } ?>

</pre>

</div>

<?php

}



function check_validation($args)
{

        $args = array_reduce($args, 'array_merge', array());

        foreach($args as $val):

            echo '<p class="mt-3 text-xs text-red-600">' . $val . '</p>';
            
        endforeach;

}