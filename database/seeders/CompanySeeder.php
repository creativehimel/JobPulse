<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companyLists = [
            [
                'ceo' => 'Chris Silver',
                'no_of_offices' => rand(1, 10),
                'established_in' => 2020,
                'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'recruiter_id' => 1,
                'industry_id' => rand(1, 5),
                'ownership_type_id' => rand(1, 5),
                'company_size_id' => rand(1, 4),
                'city_id' => rand(1, 8),
                'country_id' => 18,
                'website' => 'https://www.google.com',
                'location' => 'USA',
                'is_featured' => rand(1, 0),
                'fax' => '',
                'is_active' => 1,
                'facebook_url' => 'https://www.facebook.com',
                'twitter_url' => 'https://www.twitter.com',
                'linkedin_url' => 'https://www.linkedin.com',
                'google_plus_url' => 'https://www.googleplus.com',
                'pinterest_url' => 'https://www.pinterest.com',    
            ]
        ];
        foreach ($companyLists as $companyList) {
            Company::create($companyList);
        }

    }
}
