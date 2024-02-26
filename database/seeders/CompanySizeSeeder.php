<?php

namespace Database\Seeders;

use App\Models\CompanySize;
use Illuminate\Database\Seeder;

class CompanySizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companySizes = [
            [
                'id' => 1,
                'size' => '1-50',
            ],
            [
                'id' => 2,
                'size' => '50-200',
            ],
            [
                'id' => 3,
                'size' => '200-500',
            ],
            [
                'id' => 4,
                'size' => '500-1000',
            ],
            [
                'id' => 5,
                'size' => '1000-2000',
            ],
        ];
        foreach ($companySizes as $comapnySize) {
            CompanySize::create($comapnySize);
        }
    }
}
