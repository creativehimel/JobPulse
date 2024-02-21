<?php

namespace Database\Seeders;

use App\Models\OwnershipType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnershipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownershipTypes = [
            [
                'id' => 1,
                'name' => 'Sole Proprietorship',
                'description' => 'The sole proprietorship is the simplest business form under which one can operate a business.',
            ],
            [
                'id' => 2,
                'name' => 'Public',
                'description' => 'A company whose shares are traded freely on a stock exchange.',
            ],
            [
                'id' => 3,
                'name' => 'Private',
                'description' => 'A company whose shares may not be offered to the public for sale and which operates under legal requirements less strict than those for a public company.',
            ],
            [
                'id' => 4,
                'name' => 'Government',
                'description' => 'A government company is a company in which 51% or more of the paid-up capital is held by the Government or State Government.',
            ],
            [
                'id' => 5,
                'name' => 'NGO',
                'description' => 'A non-profit organization that operates independently of any government, typically one whose purpose is to address a social or political issue.',
            ],
        ];
        foreach ($ownershipTypes as $ownershipType) {
            OwnershipType::create($ownershipType);
        }
    }
}
