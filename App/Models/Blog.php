<?php 

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;
 
class Blog extends Model {

    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'content',
        'rate',
        'tags',
        'user_id',
        'featured_image'
    ];
    
}