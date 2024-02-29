<?php

namespace Database\Seeders;

use App\Models\ResultType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resultTypes = [
            [
                'id' => 1,
                'name' => '1ST DIVISION',
            ],
            [
                'id' => 2,
                'name' => '2ND DIVISION',
            ],
            [
                'id' => 3,
                'name' => '3RD DIVISION',
            ],
            [
                'id' => 4,
                'name' => 'GPA(OUT OF 4)',
            ],
            [
                'id' => 5,
                'name' => 'GPA(OUT OF 5)',
            ],
            [
                'id' => 6,
                'name' => 'PASSED',
            ],
        ];
        foreach ($resultTypes as $resultType){
            ResultType::create($resultType);
        }
    }
}
