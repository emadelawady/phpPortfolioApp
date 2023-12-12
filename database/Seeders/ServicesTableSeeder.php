<?php 


namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Core\EloquentDatabaseForConsole;

class ServicesTableSeeder
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
                'name'    => 'service 1',
                'description'    => 'description service 1',
                'link'    => 'link-service-1',
                'skills'    => 'Html,Css,Javascript,Php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'service 2',
                'description'    => 'description service 2',
                'link'    => 'link-service-1',
                'skills'    => 'Html,Css,Javascript,Php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'service 3',
                'description'    => 'description service 3',
                'link'    => 'link-service-3',
                'skills'    => 'Html,Css,Javascript,Php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'service 4',
                'description'    => 'description service 4',
                'link'    => 'link-service-4',
                'skills'    => 'Html,Css,Javascript,Php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'service 5',
                'description'    => 'description service 5',
                'link'    => 'link-service-5',
                'skills'    => 'Html,Css,Javascript,Php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'service 6',
                'description'    => 'description service 6',
                'link'    => 'link-service-6',
                'skills'    => 'Html,Css,Javascript,Php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-6.jpg',
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

            $users = Service::where('name', '=', $val['name'])->exists();



            if(empty($users))
            {
                Service::create([
                    'name' => $val['name'],
                    'description' => $val['description'],
                    'link' => $val['link'],
                    'skills' => $val['skills'],
                    'user_id' => $val['user_id'],
                    'featured_image' => $val['featured_image'],
                    'created_at' => $val['created_at'],
                ]);
    
    
            } else{
                self::$message = "Record {$val['name']} is Already Exists";
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