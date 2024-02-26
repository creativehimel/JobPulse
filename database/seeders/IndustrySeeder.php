<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industries = [
            [
                'id' => 1,
                'name' => 'Manufacturing',
                'description' => 'Manufacturing is the production of products for use or sale using labor and machines',
            ],
            [
                'id' => 2,
                'name' => 'Advertising',
                'description' => 'Advertising is a marketing communication that employs an openly sponsored, non-personal message to promote or sell a product, service or idea.',
            ],
            [
                'id' => 3,
                'name' => 'Technology',
                'description' => 'Technology is the sum of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives',
            ],
            [
                'id' => 4,
                'name' => 'Marketing',
                'description' => 'Marketing is the study and management of exchange relationships.',
            ],
            [
                'id' => 5,
                'name' => 'Sales',
                'description' => 'Sales are activities related to selling or the number of goods or services sold in a given targeted time period.',
            ],
        ];
        foreach ($industries as $industry) {
            Industry::create($industry);
        }
    }
}
