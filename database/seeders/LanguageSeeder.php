<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'name' => 'English',
            ],
            [
                'name' => 'Bangla',
            ],
            [
                'name' => 'Hindi',
            ],
            [
                'name' => 'Arabic',
            ],
            [
                'name' => 'French',
            ],
            [
                'name' => 'Spanish',
            ],
            [
                'name' => 'Portuguese',
            ],
            [
                'name' => 'Russian',
            ],
            [
                'name' => 'German',
            ],
            [
                'name' => 'Chinese',
            ],
            [
                'name' => 'Japanese',
            ],
            [
                'name' => 'Korean',
            ],
            [
                'name' => 'Vietnamese',
            ]
        ];

        foreach ($languages as $language) {
            Language::create($language);
        }
    }
}
