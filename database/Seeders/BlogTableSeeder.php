<?php 


namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Core\EloquentDatabaseForConsole;

class BlogTableSeeder
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
                'title'    => 'Article 1',
                'content'    => 'content 1',
                'rate'    => '9/10',
                'tags'    => 'html,css,php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'    => 'Article 2',
                'content'    => 'content 2',
                'rate'    => '9/10',
                'tags'    => 'html,css,php,OOP',
                'user_id'    => 1,
                'featured_image' => 'portfolio-2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'    => 'Article 3',
                'content'    => 'content 3',
                'rate'    => '9/10',
                'tags'    => 'html,css,javascript,php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'    => 'Article 4',
                'content'    => 'content 4',
                'rate'    => '9/10',
                'tags'    => 'html,css,php,Laravel',
                'user_id'    => 1,
                'featured_image' => 'portfolio-1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'    => 'Article 5',
                'content'    => 'content 5',
                'rate'    => '9/10',
                'tags'    => 'html,css,php',
                'user_id'    => 1,
                'featured_image' => 'portfolio-5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'    => 'Article 6',
                'content'    => 'content 6',
                'rate'    => '9/10',
                'tags'    => 'html,css,php,framework',
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

            $users = Blog::where('title', '=', $val['title'])->exists();



            if(empty($users))
            {
                Blog::create([
                    'title' => $val['title'],
                    'content' => $val['content'],
                    'rate' => $val['rate'],
                    'tags' => $val['tags'],
                    'user_id' => $val['user_id'],
                    'featured_image' => $val['featured_image'],
                    'created_at' => $val['created_at'],
                ]);
    
    
            } else{
                self::$message = "Record {$val['title']} is Already Exists";
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