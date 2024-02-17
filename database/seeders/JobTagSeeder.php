<?php

namespace Database\Seeders;

use App\Models\JobTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                "id" => 1,
                'name' => 'PHP',
            ],
            [
                'id'=> 2,
                'name' => 'Laravel',
            ],
            [
                'id'=> 3,
                'name' => 'HTML',
            ],
            [
                'id'=> 4,
                'name' => 'CSS',
            ],
            [
                'id'=> 5,
                'name' => 'Javascipt',
            ],
            [
                'id'=> 6,
                'name' => 'Java',
            ],
            [
                'id'=> 7,
                'name' => 'Python',
            ],
            [
                'id'=> 8,
                'name' => 'Ruby',
            ],
            [
                'id'=> 9,
                'name' => 'Android',
            ],
        ];
        foreach ($tags as $tag) {
            JobTag::create($tag);
        }
    }
}
