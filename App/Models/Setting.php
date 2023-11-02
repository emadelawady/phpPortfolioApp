<?php 

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;
 
class Setting extends Model {
    protected $table = 'settings';
    protected $fillable = [
        'setting_name',
        'head_one',
        'head_two',
        'description_one',
        'description_two',
        'custom_link_one',
        'custom_link_two',
        'custom_link_three',
        'custom_link_four',
        'custom_field_one',
        'custom_field_two',
        'custom_field_three',
        'custom_field_four',
        'custom_field_five',
        'custom_field_six',
        'custom_field_seven',
        'custom_field_eight',
        'feature_image_one',
        'feature_image_two',
    ];
    
}