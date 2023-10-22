<?php 

use Core\App;
use Core\Database;
use App\Models\User;

$db = App::resolve(Database::class);


$test = $db->query("SELECT * FROM users")->get();

dd($test);


// echo 'Controllers/Index';

