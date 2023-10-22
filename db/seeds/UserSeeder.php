<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
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
            ],

        ];

        $users = $this->table('users');
        $users->insert($data)
              ->saveData();
    }
}
