<?php 


namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Core\EloquentDatabaseForConsole;

class PortfolioTableSeeder
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
                'name'    => 'PhpPortfolioApp',
                'description'    => 'plain php web App',
                'link'    => 'link-1',
                'built_with'    => 'Html,Css,Javascript,Php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'AgencyFilamentApp',
                'description'    => 'Laravel web App',
                'link'    => 'link-2',
                'built_with'    => 'Html,Css,Javascript,Php, Laravel, Filament',
                'user_id'    => 2,
                'featured_image' => 'portfolio-2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'PhpWebApp',
                'description'    => 'plain php web App',
                'link'    => 'link-3',
                'built_with'    => 'Html,Css,Javascript,Php, OOP',
                'user_id'    => 1,
                'featured_image' => 'portfolio-3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'PhpWebAppTwo',
                'description'    => 'plain php web App',
                'link'    => 'link-4',
                'built_with'    => 'Html,Css,Tailwind,Javascript,Php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'PhpWebAppThree',
                'description'    => 'plain php web App',
                'link'    => 'link-5',
                'built_with'    => 'Html,Css,Javascript,Php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'PhpWebAppFour',
                'description'    => 'plain php web App',
                'link'    => 'link-6',
                'built_with'    => 'Html,Css,Javascript,Php',
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

            $users = Portfolio::where('name', '=', $val['name'])->exists();



            if(empty($users))
            {
                Portfolio::create([
                    'name' => $val['name'],
                    'description' => $val['description'],
                    'link' => $val['link'],
                    'built_with' => $val['built_with'],
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