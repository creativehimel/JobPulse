<?php

namespace Database\Seeders;

use App\Models\DegreeType;
use Illuminate\Database\Seeder;

class DegreeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $degreeTypes = [
            [
                'id' => 1,
                'name' => 'Executive Masters in Business Administration',
                'degree_level_id' => 5,
            ],
            [
                'id' => 2,
                'name' => 'Masters in Science',
                'degree_level_id' => 5,
            ],
            [
                'id' => 3,
                'name' => 'Masters in Law',
                'degree_level_id' => 5,
            ],
            [
                'id' => 4,
                'name' => 'Masters of Education',
                'degree_level_id' => 5,
            ],
            [
                'id' => 5,
                'name' => 'Masters in Commerce',
                'degree_level_id' => 5,
            ],
            [
                'id' => 6,
                'name' => 'Masters in Business Administration',
                'degree_level_id' => 5,
            ],
            [
                'id' => 7,
                'name' => 'Masters in Arts',
                'degree_level_id' => 5,
            ],
            [
                'id' => 8,
                'name' => 'Post Registered Nursing B.S.',
                'degree_level_id' => 4,
            ],
            [
                'id' => 9,
                'name' => 'MBBS',
                'degree_level_id' => 4,
            ],
            [
                'id' => 10,
                'name' => 'Doctor of Veterinary Medicine',
                'degree_level_id' => 4,
            ],
            [
                'id' => 11,
                'name' => 'BCS/BS',
                'degree_level_id' => 4,
            ],
            [
                'id' => 12,
                'name' => 'Bachelors in Technology',
                'degree_level_id' => 4,
            ],
            [
                'id' => 13,
                'name' => '	Bachelors in Law',
                'degree_level_id' => 4,
            ],
            [
                'id' => 14,
                'name' => 'Bachelors of Science in Nursing (Registered Nursing)',
                'degree_level_id' => 4,
            ],
            [
                'id' => 15,
                'name' => 'Bachelors in Science',
                'degree_level_id' => 4,
            ],
            [
                'id' => 16,
                'name' => 'Bachelors in Pharmacy',
                'degree_level_id' => 4,
            ],
            [
                'id' => 17,
                'name' => 'Bachelors in Engineering',
                'degree_level_id' => 4,
            ],
            [
                'id' => 18,
                'name' => 'Bachelors of Education',
                'degree_level_id' => 4,
            ],
            [
                'id' => 19,
                'name' => 'Bachelors of Dental Surgery',
                'degree_level_id' => 4,
            ],
            [
                'id' => 20,
                'name' => 'Bachelors in Commerce',
                'degree_level_id' => 4,
            ],
            [
                'id' => 21,
                'name' => 'Bachelors in Business Administration',
                'degree_level_id' => 4,
            ],
            [
                'id' => 22,
                'name' => 'Bachelors in Architecture',
                'degree_level_id' => 4,
            ],
            [
                'id' => 23,
                'name' => 'Bachelors in Arts',
                'degree_level_id' => 4,
            ],
            [
                'id' => 24,
                'name' => 'Intermediate in General Science',
                'degree_level_id' => 3,
            ],
            [
                'id' => 25,
                'name' => 'Intermediate in Commerce',
                'degree_level_id' => 3,
            ],
            [
                'id' => 26,
                'name' => 'Intermediate in Computer Science',
                'degree_level_id' => 3,
            ],
            [
                'id' => 27,
                'name' => 'Faculty of Science (Pre-Engineering)',
                'degree_level_id' => 3,
            ],
            [
                'id' => 28,
                'name' => 'Faculty of Science (Pre-medical)',
                'degree_level_id' => 3,
            ],
            [
                'id' => 29,
                'name' => 'Faculty of Arts',
                'degree_level_id' => 3,
            ],
            [
                'id' => 30,
                'name' => 'A-Levels',
                'degree_level_id' => 3,
            ],
            [
                'id' => 31,
                'name' => 'O-Levels',
                'degree_level_id' => 2,
            ],
            [
                'id' => 32,
                'name' => '	Matric in Science',
                'degree_level_id' => 2,
            ],
            [
                'id' => 33,
                'name' => 'Matric in Arts',
                'degree_level_id' => 2,
            ],
        ];
        foreach ($degreeTypes as $degreeType) {
            DegreeType::create($degreeType);
        }
    }
}
