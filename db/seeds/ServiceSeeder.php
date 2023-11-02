<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class ServiceSeeder extends AbstractSeed
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

        $users = $this->table('services');
        $users->insert($data)
              ->saveData();
    }
}
