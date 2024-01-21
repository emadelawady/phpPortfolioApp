<?php 


namespace App\Http\Controllers\Backend\Settings;

use App\Models\Setting;
use App\Models\User;
use Core\Auth;
use Core\Helper;
use Core\Session;
use Core\View;

class Homepage {

    public function index(): View {

        $auth = new Auth();

        $user = User::where('email', '=', $auth->user()->email)->first();

        $homepage_hero_settings = Setting::where('setting_name', '=', 'homepage_hero')->first();

        // Session::unflash_message('message');
        
        return View::view('backend.settings.homepage', [
            'user' => $user,
            'homepage_hero_settings' => $homepage_hero_settings
        ]);
    }

    public function update(): Helper{

   



        $settings_hero = Setting::where('setting_name', '=', 'homepage_hero')->first();
        
        $settings_hero_id = $settings_hero->id;

        $update_settings_hero = Setting::find($settings_hero_id);

        $update_settings_hero->head_one = $_POST['head_one'];
        $update_settings_hero->head_two = $_POST['head_two'];
        $update_settings_hero->custom_field_one = $_POST['custom_field_one'];
        $update_settings_hero->custom_link_one = $_POST['custom_link_one'];
        $update_settings_hero->custom_field_two = $_POST['custom_field_two'];
        $update_settings_hero->custom_link_two = $_POST['custom_link_two'];
        $update_settings_hero->description_one = $_POST['description_one'];

         $update_settings_hero->save();


         
        Session::put('message','Save Successfully');
        
  

         return Helper::redirect()->to('admin.settings.homepage');



    }



}