<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobExperience;
use App\Models\JobType;
use App\Models\Recruiter;
use Illuminate\Http\Request;

class JobPageController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company', 'country','city', 'jobType', 'salaryCurrency', 'salaryPeriod')->get();
        $jobCategories = JobCategory::select('id', 'name')->get();
        $jobTypes = JobType::select('id', 'name')->get();
        $experienceLevels = JobExperience::select('id', 'name')->get();
        return view('pages.frontend.job.index', compact('jobs', 'jobCategories', 'jobTypes', 'experienceLevels'));
    }

    public function show($slug)
    {
        $job = Job::with('company', 'country','city', 'jobType', 'salaryCurrency', 'salaryPeriod')->where('slug', $slug)->first();
        $latestJobs = Job::with('country','city', 'jobType', 'salaryCurrency', 'salaryPeriod')->where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.frontend.job.single', compact('job', 'latestJobs'));
    }
}
