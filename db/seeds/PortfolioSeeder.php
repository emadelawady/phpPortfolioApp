<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class PortfolioSeeder extends AbstractSeed
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

        $users = $this->table('portfolios');
        $users->insert($data)
              ->saveData();
    }
}
