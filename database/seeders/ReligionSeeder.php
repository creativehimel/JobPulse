<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $religions = [
            [
                'id' => 1,
                'name' => 'Christianity'
            ],
            [
                'id' => 2,
                'name' => 'Islam'
            ],
            [
                'id' => 3,
                'name' => 'Hinduism'
            ],
            [
                'id' => 4,
                'name' => 'Buddhism'
            ],
            [
                'id' => 5,
                'name' => 'Judaism'
            ]
        ];
        foreach ($religions as $religion){
            Religion::create($religion);
        }
    }
}
