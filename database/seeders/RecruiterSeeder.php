<?php

namespace Database\Seeders;

use App\Models\Recruiter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecruiterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recruiter = [
            "name"=> "Md. Himel Ali",
            "email"=> "himel.phy160@gmail.com",
            "password"=> bcrypt("123456"),
        ];
        Recruiter::create($recruiter);
    }
}
