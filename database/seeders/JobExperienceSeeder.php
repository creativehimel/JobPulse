<?php

namespace Database\Seeders;

use App\Models\JobExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                "id"=> 1,
                "name"=> "Fresher",
            ],
            [
                "id"=> 2,
                "name"=> "Less Than 1 Year",
            ],
            [
                "id"=> 3,
                "name"=> "1 Year",
            ],
            [
                "id"=> 4,
                "name"=> "2 Year",
            ],
            [
                "id"=> 5,
                "name"=> "3 Year",
            ],
            [
                "id"=> 6,
                "name"=> "4 Year",
            ],
            [
                "id"=> 7,
                "name"=> "5 Year",
            ],
            [
                "id"=> 8,
                "name"=> "6 Year",
            ],
            [
                "id"=> 9,
                "name"=> "7 Year",
            ],
            [
                "id"=> 10,
                "name"=> "8 Year",
            ],
            [
                "id"=> 11,
                "name"=> "9 Year",
            ],
            [
                "id"=> 12,
                "name"=> "10 Year",
            ],
        ];
        foreach ($experiences as $experience) {
            JobExperience::create($experience);
        }
    }
}
