<?php

namespace Database\Seeders;

use App\Models\LanguageLevel;
use Illuminate\Database\Seeder;

class LanguageLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            [
                'id' => 1,
                'name' => 'Beginner',
            ],
            [
                'id' => 2,
                'name' => 'Intermediate',
            ],
            [
                'id' => 3,
                'name' => 'Expert',
            ],
        ];
        foreach ($levels as $level) {
            LanguageLevel::create($level);
        }
    }
}
