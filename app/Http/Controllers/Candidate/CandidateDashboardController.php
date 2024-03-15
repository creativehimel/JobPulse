<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class CandidateDashboardController extends Controller
{
    public function index()
    {
        $totalJobApplied = JobApplication::where('user_id', auth()->user()->id)->count();
        $totalJobApproved = JobApplication::where('user_id', auth()->user()->id)->where('status', 1)->count();
        $totalJobRejected = JobApplication::where('user_id', auth()->user()->id)->where('status', 2)->count();
        $totalJobPending = JobApplication::where('user_id', auth()->user()->id)->where('status', 2)->count();
        return view('pages.dashboard', compact( 'totalJobApplied', 'totalJobApproved', 'totalJobRejected', 'totalJobPending'));
    }
}
