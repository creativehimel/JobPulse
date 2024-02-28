<?php

namespace Database\Seeders;

use App\Models\CandidatePersonalInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidatePersonalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personalInfo = [
            'father_name' => 'Max Bower',
            'mother_name' => 'Max Bower',
            'dob' => '1997-12-25',
            'nationality' => 'Bangladeshi',
            'national_id' => '',
            'passport_id' => '',
            'user_id' => 1,
            'gender_id' => 1,
            'marital_status_id' => 1,
            'religion_id' => 1,
            'blood_group_id' => 2,
        ];
        CandidatePersonalInformation::create($personalInfo);
    }
}
