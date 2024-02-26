<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maritalStatuses = [
            [
                'id' => 1,
                'name' => 'Single',
            ],
            [
                'id' => 2,
                'name' => 'Married',
            ],
            [
                'id' => 3,
                'name' => 'Divorced',
            ],
            [
                'id' => 4,
                'name' => 'Separated',
            ],
        ];
        foreach ($maritalStatuses as $maritalStatus) {
            MaritalStatus::create($maritalStatus);
        }

    }
}
