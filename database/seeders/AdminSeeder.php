<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'name' => 'John Doe',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ];
        Admin::create($admin);
    }
}
