<?php

namespace App\Http\Controllers\Recruiter;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class ManageJobApplication extends Controller
{
    public function index()
    {
        $jobApplications = JobApplication::with('job', 'user')->orderBy('created_at', 'desc')->get();
        return view('recruiter.pages.manageJobApplication.index', compact('jobApplications'));
    }

    public function show($id)
    {
        $jobApplication = JobApplication::with('job', 'user')->findOrFail($id);
        return view('recruiter.pages.manageJobApplication.view', compact('jobApplication'));
    }
    public function update(Request $request, $id)
    {
        $jobApplication = JobApplication::findOrFail($id);
        $jobApplication->status = $request->status;
        $jobApplication->save();
        notify()->success('Job Appplication status updated successfully.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $jobApplication = JobApplication::findOrFail($id);
        $jobApplication->delete();
        notify()->success('Job Application Deleted succussfully');
        return redirect()->back();
    }
}
