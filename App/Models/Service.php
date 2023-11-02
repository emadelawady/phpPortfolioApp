<?php 

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;
 
class Service extends Model {

    protected $table = 'services';
    protected $fillable = [
        'name',
        'description',
        'link',
        'skills',
        'user_id',
        'featured_image'
    ];
    
}