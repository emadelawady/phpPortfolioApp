<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class SettingSeeder extends AbstractSeed
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

        $users = $this->table('settings');
        $users->insert($data)
              ->saveData();
    }
}
