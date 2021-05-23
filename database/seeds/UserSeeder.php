<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users = [
            [
                'id' => 1,
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('123456')
            ],
            [
                'id' => 2,
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => bcrypt('123456'),
            ]
        ];

        try {
            foreach ($users as $user) {
               User::create($user);
            }
        } catch (\Throwable $th) {

        }
    }
}
