<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AdminSeeder::class,
            RecruiterSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            GenderSeeder::class,
            LanguageSeeder::class,
            ReligionSeeder::class,
            ResultTypeSeeder::class,
            JobSkillSeeder::class,
            JobTypeSeeder::class,
            JobShiftSeeder::class,
            JobExperienceSeeder::class,
            JobCategorySeeder::class,
            JobTagSeeder::class,
            CareerLevelSeeder::class,
            LanguageLevelSeeder::class,
            DegreeLevelSeeder::class,
            DegreeTypeSeeder::class,
            FunctionalAreaSeeder::class,
            MaritalStatusSeeder::class,
            SalaryPeriodSeeder::class,
            SalaryCurrencySeeder::class,
            CompanySizeSeeder::class,
            OwnershipTypeSeeder::class,
            IndustrySeeder::class,
            CompanySeeder::class,
            UserSeeder::class,
            BloodGroupSeeder::class,
            CandidatePersonalInformationSeeder::class,
        ]);
    }
}
