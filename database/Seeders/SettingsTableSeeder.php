<?php 


namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Core\EloquentDatabaseForConsole;

class SettingsTableSeeder
{

    public static ?string $message = null;
    public function __construct()
    {
        $this->seed();
    }


    public function data(): array
    {
        return [
            [
                'setting_name'    => 'homepage_hero',
                'head_one'    => 'HELLO!',
                'head_two'    => "I'm a Back End Developer!",
                'description_one' => 'with a tall stack skills i can build almost anything',
                'custom_field_one' => 'Hire Me',
                'custom_field_two' => 'My Cv',
                'custom_link_one' => 'link-1',
                'custom_link_two' => 'link-2',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'setting_name'    => 'homepage_about',
                'head_one'    => 'About Me',
                'head_two'    => 'Backend PHP, Laravel Developer',
                'description_one'    => "description from seeds",
                'description_two' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'custom_field_one' => 'Birthday: 1 May 1995',
                'custom_field_two' => 'Age: 30',
                'custom_field_three' => 'Degree: Master',
                'custom_field_four' => 'PhEmailone: email@example.com',
                'custom_field_five' => 'Phone: +123 456 7890',
                'custom_field_six' => 'City: New York, USA',
                'custom_field_seven' => 'Freelance: Available',
                'custom_link_one' => 'Website: www.example.com',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];
    }
    
    /**
     * Run the database seeders.
     */
    public function seed()
    {

        // dd($this->data());
        // initialize Illuminate database connection 
        new EloquentDatabaseForConsole();

        // $users = User::where('email', '=', 'emad@emad.com')->exists();

        // create Admin Account & Check if already Exists


        foreach ($this->data() as $val) {

            $setting = Setting::where('setting_name', '=', $val['setting_name'])->exists();



            if(empty($setting))
            {
                Setting::create([
                    'setting_name' => $val['setting_name'] ?? '',
                    'head_one' => $val['head_one'] ?? '',
                    'head_two' => $val['head_two'] ?? '',
                    'description_one' => $val['description_one'] ?? '',
                    'description_two' => $val['description_two'] ?? '',
                    'custom_link_one' => $val['custom_link_one'] ?? '',
                    'custom_link_two' => $val['custom_link_two'] ?? '',
                    'custom_link_three' => $val['custom_link_three'] ?? '',
                    'custom_link_four' => $val['custom_link_four'] ?? '',
                    'custom_field_one' => $val['custom_field_one'] ?? '',
                    'custom_field_two' => $val['custom_field_two'] ?? '',
                    'custom_field_three' => $val['custom_field_three'] ?? '',
                    'custom_field_four' => $val['custom_field_four'] ?? '',
                    'custom_field_five' => $val['custom_field_five'] ?? '',
                    'custom_field_six' => $val['custom_field_six'] ?? '',
                    'custom_field_seven' => $val['custom_field_seven'] ?? '',
                    'custom_field_eight' => $val['custom_field_eight'] ?? '',
                    'feature_image_one' => $val['feature_image_one'] ?? '',
                    'feature_image_two' => $val['feature_image_two'] ?? '',
                ]);
    
    
            } else{
                self::$message = "Record {$val['setting_name']} is Already Exists";
            }
    



            # code...
        }

        // return 



        // if(empty($users))
        // {
        //     User::create([
        //         'name' => 'emad',
        //         'email' => 'emad@emad.com',
        //         'password' => password_hash('123456789', PASSWORD_DEFAULT),
        //         'profile_image' => 'person-1.jpg',
        //     ]);


        // } else{
        //     $this->message = 'emad user is Already Exists';
        // }

        
        // User::create([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => password_hash('password', PASSWORD_DEFAULT),
        //     'profile_image' => 'person-2.jpg',
        // ]);
    }
}