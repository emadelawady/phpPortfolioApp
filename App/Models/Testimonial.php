<?php 

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;
 
class Testimonial extends Model {

    protected $table = 'testimonials';
    protected $fillable = [
        'title',
        'content',
        'rate',
        'user_id',
        'featured_image'
    ];
    
}