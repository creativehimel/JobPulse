<?php

namespace Database\Seeders;

use App\Models\JobShift;
use Illuminate\Database\Seeder;

class JobShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shifts = [
            [
                'id' => 1,
                'shift' => 'First Shift (Day)',
                'description' => '1st shift hours refer to the first shift of the day where an employee comes to work in the morning and leaves in the afternoon.',
            ],
            [
                'id' => 2,
                'shift' => 'Second Shift (Afternoon)',
                'description' => 'Second shift typically refers to the evening or afternoon shift where employees clock in between 3 p.m. and 6 p.m. and clock out between 11 p.m. and 1 a.m.',
            ],
            [
                'id' => 3,
                'shift' => 'Third Shift (Night)',
                'description' => 'Third shift is the overnight work period, which typically runs from 11 p.m. to 7 a.m.',
            ],
        ];
        foreach ($shifts as $shift) {
            JobShift::create($shift);
        }
    }
}
