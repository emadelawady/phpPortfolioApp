<?php 

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;
 
class UserTwo extends Model {

    protected $table = 'users_two';
    protected $fillable = ['name', 'email', 'password', 'profile_image'];
    
}