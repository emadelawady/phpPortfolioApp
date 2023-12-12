<?php 


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Core\EloquentDatabaseForConsole;

class UserSeeder
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
                'name'    => 'Emad',
                'email'    => 'emad@emad.com',
                'password' => password_hash('123456789', PASSWORD_DEFAULT),
                'profile_image' => 'person-1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'Eric',
                'email'    => 'eric@eric.com',
                'password' => password_hash('123456789', PASSWORD_DEFAULT),
                'profile_image' => 'person-2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'John',
                'email'    => 'john@john.com',
                'password' => password_hash('123456789', PASSWORD_DEFAULT),
                'profile_image' => 'person-3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'Malika',
                'email'    => 'malika@malika.com',
                'password' => password_hash('123456789', PASSWORD_DEFAULT),
                'profile_image' => 'person-4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ]
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

            $users = User::where('email', '=', $val['email'])->exists();



            if(empty($users))
            {
                User::create([
                    'name' => $val['name'],
                    'email' => $val['email'],
                    'password' => $val['password'],
                    'profile_image' => $val['profile_image'],
                    'created_at' => $val['created_at'],
                ]);
    
    
            } else{
                self::$message = 'users is Already Exists';
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