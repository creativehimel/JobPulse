<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = file_get_contents(storage_path('countries/cities.json'));
        $cities = json_decode($cities, true)['cities'];
        City::insert($cities);
    }
}