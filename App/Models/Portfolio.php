<?php 

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;
 
class Portfolio extends Model {

    protected $table = 'portfolios';
    protected $fillable = [
        'name',
        'description',
        'link',
        'built_with',
        'user_id',
        'featured_image'
    ];
    
}