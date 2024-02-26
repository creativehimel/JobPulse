<?php

namespace Database\Seeders;

use App\Models\FunctionalArea;
use Illuminate\Database\Seeder;

class FunctionalAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $functionalAreas = [
            [
                'id' => 1,
                'name' => 'Accountant',
            ],
            [
                'id' => 2,
                'name' => 'Accounts, Finance & Financial Services',
            ],
            [
                'id' => 3,
                'name' => 'Admin',
            ],
            [
                'id' => 4,
                'name' => 'Admin Operation',
            ],
            [
                'id' => 5,
                'name' => 'Administration',
            ],
            [
                'id' => 6,
                'name' => 'Administration Clerical',
            ],
            [
                'id' => 7,
                'name' => 'Advertising',
            ],
            [
                'id' => 8,
                'name' => 'Advertisement',
            ],
            [
                'id' => 9,
                'name' => 'Architects & Construction',
            ],
            [
                'id' => 10,
                'name' => 'Architecture',
            ],
            [
                'id' => 11,
                'name' => 'Bank Operation',
            ],
            [
                'id' => 12,
                'name' => 'Business Development',
            ],
            [
                'id' => 13,
                'name' => 'Business Management',
            ],
            [
                'id' => 14,
                'name' => 'Business Systems Analyst',
            ],
            [
                'id' => 15,
                'name' => 'Clerical',
            ],
            [
                'id' => 16,
                'name' => 'Client Services & Customer Support',
            ],
            [
                'id' => 17,
                'name' => 'Computer Hardware',
            ],
            [
                'id' => 18,
                'name' => 'Computer Networking',
            ],
            [
                'id' => 19,
                'name' => 'Consultant',
            ],
            [
                'id' => 20,
                'name' => 'Content Writer',
            ],
            [
                'id' => 21,
                'name' => 'Corporate Affairs',
            ],
            [
                'id' => 22,
                'name' => 'Creative Design',
            ],
            [
                'id' => 23,
                'name' => 'Creative Writer',
            ],
            [
                'id' => 24,
                'name' => 'Customer Support',
            ],
            [
                'id' => 25,
                'name' => 'Data Entry',
            ],
            [
                'id' => 26,
                'name' => 'Data Entry Operator',
            ],
            [
                'id' => 27,
                'name' => 'Database Administration (DBA)',
            ],
            [
                'id' => 28,
                'name' => 'Development',
            ],
            [
                'id' => 29,
                'name' => 'Distribution & Logistics',
            ],
            [
                'id' => 30,
                'name' => 'Education & Training',
            ],
            [
                'id' => 31,
                'name' => 'Electronics Technician',
            ],
            [
                'id' => 32,
                'name' => 'Engineering',
            ],
            [
                'id' => 33,
                'name' => 'Engineering Construction',
            ],
            [
                'id' => 35,
                'name' => 'Executive Management',
            ],
            [
                'id' => 36,
                'name' => 'Executive Secretary',
            ],
            [
                'id' => 37,
                'name' => 'Field Operations',
            ],
            [
                'id' => 38,
                'name' => 'Front Desk Clerk',
            ],
            [
                'id' => 39,
                'name' => 'Front Desk Officer',
            ],
            [
                'id' => 40,
                'name' => 'Graphic Design',
            ],
            [
                'id' => 41,
                'name' => 'Hardware',
            ],
            [
                'id' => 42,
                'name' => 'Health & Medicine',
            ],
            [
                'id' => 43,
                'name' => 'Health & Safety',
            ],
            [
                'id' => 44,
                'name' => 'Health Care',
            ],
            [
                'id' => 45,
                'name' => 'Health Related',
            ],
            [
                'id' => 46,
                'name' => 'Hotel Management',
            ],
            [
                'id' => 47,
                'name' => 'Hotel/Restaurant Management',
            ],
            [
                'id' => 48,
                'name' => 'Human Resources (HR)',
            ],
            [
                'id' => 49,
                'name' => 'Import & Export',
            ],
            [
                'id' => 50,
                'name' => 'Industrial Production',
            ],
            [
                'id' => 51,
                'name' => 'Installation & Repair',
            ],
            [
                'id' => 52,
                'name' => 'Interior Designers & Architects',
            ],
        ];
        foreach ($functionalAreas as $functionalArea) {
            FunctionalArea::create($functionalArea);
        }
    }
}
