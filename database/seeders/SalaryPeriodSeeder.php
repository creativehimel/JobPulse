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
                'name' => 'Daily Pay Period',
            ],
            [
                'id' => 2,
                'name' => 'Weekly Pay Period',
            ],
            [
                'id' => 3,
                'name' => 'Every Other Week Pay Period',
            ],
            [
                'id' => 4,
                'name' => 'Semi Monthly Pay Period',
            ],
            [
                'id' => 5,
                'name' => 'Monthly Pay Period',
            ],
            [
                'id' => 6,
                'name' => 'Project Based Pay Period',
            ],
        ];
        foreach ($salaryPeriods as $period) {
            SalaryPeriod::create($period);
        }
    }
}
