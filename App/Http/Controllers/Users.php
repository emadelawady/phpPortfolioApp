<?php 
use App\Http\Controllers\Users\UserController; 
 
$user = UserController::create_user("user1", "user1@example.com", "user1_pass");

dd($user);