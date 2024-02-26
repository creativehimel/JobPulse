<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'id' => 1,
                'name' => 'Contact',
                'description' => 'Contract employees, also called independent contractors, contract workers, freelancers or work-for-hire staffers, are individuals hired for a specific project or a certain timeframe for a set fee. Often, contract employees are hired due to their expertise in a particular area, like writing or illustration.',
            ],
            [
                'id' => 2,
                'name' => 'Freelancer',
                'description' => 'Definition and Meaning. Essentially, a freelance job is one where a person works for themselves, rather than for a company. While freelancers do take on contract work for companies and organizations, they are ultimately self-employed.',
            ],
            [
                'id' => 3,
                'name' => 'Full Time',
                'description' => 'The total number of working hours for a full-time worker is between 32 to 40 hours per week. They are supposed to work for at least 32 hours per week. The amount of manpower demanded from a full-time worker is more as compared to a part-time worker.',
            ],
            [
                'id' => 4,
                'name' => 'Part Time',
                'description' => 'A part-time job is a form of employment that carries fewer hours per week than a full-time job. They work in shifts. The shifts are often rotational. Workers are considered to be part-time if they commonly work fewer than 30 hours per week.',
            ],
            [
                'id' => 5,
                'name' => 'Internship',
                'description' => "An internship is a professional learning experience that offers meaningful, practical work related to a student's field of study or career interest. An internship gives a student the opportunity for career exploration and development, and to learn new skills.",
            ],
        ];
        foreach ($types as $type) {
            JobType::create($type);
        }
    }
}
