<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        $jobCategories = JobCategory::all();
        return view('index', compact('countries', 'jobCategories'));
    }
}
