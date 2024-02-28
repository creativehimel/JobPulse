<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Smith',
                'email' => 'john@doe.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Edward D. Smith',
                'email' => 'edward@gmail.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'James R. Harris',
                'email' => 'james@gmail.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Hector L. Held',
                'email' => 'hector@gmail.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Micheal P. Moss',
                'email' => 'micheal@gmail.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'George C. Gonzalez',
                'email' => 'george@gmail.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'John A. Kirchner',
                'email' => 'john@gmail.com',
                'password' => bcrypt('12345678')
            ]
        ];
        foreach ($users as $user){
            User::create($user);
        }
    }
}
