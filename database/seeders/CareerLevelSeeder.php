<?php

namespace Database\Seeders;

use App\Models\CareerLevel;
use Illuminate\Database\Seeder;

class CareerLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $careerLevels = [
            [
                'id' => 1,
                'name' => 'Entry',
            ],
            [
                'id' => 2,
                'name' => 'Intermediate',
            ],
            [
                'id' => 3,
                'name' => 'Senior',
            ],
            [
                'id' => 4,
                'name' => 'Highly Skilled',
            ],
            [
                'id' => 5,
                'name' => 'Specialist',
            ],
            [
                'id' => 6,
                'name' => 'Developing',
            ],
            [
                'id' => 7,
                'name' => 'Advanced',
            ],
            [
                'id' => 8,
                'name' => 'Expert',
            ],
            [
                'id' => 9,
                'name' => 'Principal',
            ],
            [
                'id' => 10,
                'name' => 'Supervisor',
            ],
            [
                'id' => 11,
                'name' => 'Sr. Supervisor',
            ],
            [
                'id' => 12,
                'name' => 'Manager',
            ],
            [
                'id' => 13,
                'name' => 'Sr. Manager',
            ],
            [
                'id' => 14,
                'name' => 'Director',
            ],
            [
                'id' => 15,
                'name' => 'Sr. Director',
            ],
            [
                'id' => 16,
                'name' => 'Vice President',
            ],
        ];
        foreach ($careerLevels as $careerLevel) {
            CareerLevel::create($careerLevel);
        }
    }
}
