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
                'name' => 'PSC/Equivalent Level',
            ],
            [
                'id' => 2,
                'name' => 'JSC/Equivalent Level',
            ],
            [
                'id' => 3,
                'name' => 'SSC/Equivalent Level',
            ],
            [
                'id' => 4,
                'name' => 'HSC/Equivalent Level',
            ],
            [
                'id' => 5,
                'name' => 'Graduation/Equivalent Level',
            ],
            [
                'id' => 6,
                'name' => 'Masters/Equivalent Level',
            ],
        ];
        foreach ($resultTypes as $resultType){
            ResultType::create($resultType);
        }
    }
}
