<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'id' => 1,
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123456')
            ],
            [
                'id' => 2,
                'name' => 'admin2',
                'email' => 'admin2@gmail.com',
                'password' => bcrypt('123456'),
            ]
        ];

        try {
            foreach ($admins as $admin) {
                Admin::create($admin);
            }
        } catch (\Throwable $th) {

        }
    }
}
