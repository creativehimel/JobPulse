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
                'iso_code' => 'en'
            ],
            [
                'name' => 'Bangla',
                'iso_code' => 'bn'
            ],
            [
                'name' => 'Hindi',
                'iso_code' => 'hi'
            ],
            [
                'name' => 'Arabic',
                'iso_code' => 'ar'
            ],
            [
                'name' => 'French',
                'iso_code' => 'fr'
            ],
            [
                'name' => 'Spanish',
                'iso_code' => 'es'
            ],
            [
                'name' => 'Portuguese',
                'iso_code' => 'pt'
            ],
            [
                'name' => 'Russian',
                'iso_code' => 'ru'
            ],
            [
                'name' => 'German',
                'iso_code' => 'de'
            ],
            [
                'name' => 'Chinese',
                'iso_code' => 'zh'
            ],
            [
                'name' => 'Japanese',
                'iso_code' => 'ja'
            ],
            [
                'name' => 'Korean',
                'iso_code' => 'ko'
            ],
            [
                'name' => 'Vietnamese',
                'iso_code' => 'vi'
            ]
        ];

        foreach ($languages as $language) {
            Language::create($language);
        }
    }
}
