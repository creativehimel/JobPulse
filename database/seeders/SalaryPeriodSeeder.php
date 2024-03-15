<?php

namespace Database\Seeders;

use App\Models\SalaryPeriod;
use Illuminate\Database\Seeder;

class SalaryPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salaryPeriods = [
            [
                'id' => 1,
                'name' => 'Daily',
            ],
            [
                'id' => 2,
                'name' => 'Weekly',
            ],
            [
                'id' => 3,
                'name' => 'Semi Monthly',
            ],
            [
                'id' => 4,
                'name' => 'Monthly',
            ],
            [
                'id' => 5,
                'name' => 'Project Based',
            ]
        ];
        foreach ($salaryPeriods as $period) {
            SalaryPeriod::create($period);
        }
    }
}
