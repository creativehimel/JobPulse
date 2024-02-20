<?php

namespace Database\Seeders;

use App\Models\DegreeLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DegreeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $degreeLevels = [
            [
                "id"=> 1,
                "name"=> "Non-Matriculation",
            ],
            [
                "id"=> 2,
                "name"=> "	Matriculation/O-Level",
            ],
            [
                "id"=> 3,
                "name"=> "Intermediate/A-Level",
            ],
            [
                "id"=> 4,
                "name"=> "Bachelors",
            ],
            [
                "id"=> 5,
                "name" => "Masters",
            ],
            [
                "id" => 6,
                "name" => "MPhil/MS",
            ],
            [
                "id"=> 7,
                "name"=> "PHD/Doctorate",
            ],
            [
                "id"=> 8,
                "name"=> "Certification",
            ],
            [
                "id"=> 9,
                "name"=> "Diploma",
            ],
            [
                "id"=> 10,
                "name"=> "Short Course",
            ]
        ];
        foreach ($degreeLevels as $level) {
            DegreeLevel::create($level);
        }
    }
}
