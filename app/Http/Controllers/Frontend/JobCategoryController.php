<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function getFilterCategoryJob(string $slug)
    {
        $jobs = JobCategory::with('job')->where('slug', $slug)->select('id', 'name')->get();
        return view('pages.frontend.job.filterByCategory', compact('jobs'));
    }
}
