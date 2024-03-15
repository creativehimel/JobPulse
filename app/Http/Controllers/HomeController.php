<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\FavouriteJob;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $countries = Country::select('id', 'name')->get();
        $jobCategories = JobCategory::where('status', 1)->orderBy('created_at', 'desc')->take(8)->get();
        $featuredJobs = Job::where('status', 1)->where('is_featured', 1)->orderBy('created_at', 'desc')->take(6)->get();
        $latestJobs = Job::with('country','city', 'jobType', 'salaryCurrency', 'salaryPeriod')->where('status', 1)->orderBy('created_at', 'desc')->take(6)->get();
        $favoriteJobs = FavouriteJob::all();
        return view('index', compact('countries', 'jobCategories', 'featuredJobs', 'latestJobs', 'favoriteJobs'));
    }
}
