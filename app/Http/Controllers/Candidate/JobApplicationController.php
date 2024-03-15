<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function index()
    {
        $jobApplications = JobApplication::with('job')->get();
        return view('pages.jobApplication.index', compact('jobApplications'));
    }

    public function store(Request $request)
    {
        $count = JobApplication::where('job_id', $request->job_id)->where('user_id', auth()->user()->id)->count();
        if ($count > 0) {
            notify()->warning('Already Applied');
            return redirect()->back();
        } else {
            $request->validate([
                'job_id' => 'required',
            ]);

            JobApplication::create([
                'job_id' => $request->job_id,
                'user_id' => auth()->user()->id
            ]);
            notify()->success('Job Applied Successfully');
            return redirect()->route('job-applications.index');
        }
    }
        public function destroy($id)
        {
            $jobApplication = JobApplication::findOrFail($id);
            $jobApplication->delete();
            notify()->success('Job Application Deleted Successfully');
            return redirect()->back();
        }
}
