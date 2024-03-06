<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = file_get_contents(storage_path('countries/states.json'));
        $states = json_decode($states, true)['states'];
        State::insert($states);
    }
}
