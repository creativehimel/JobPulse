<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class ManageJobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.manageJob.index', compact('jobs'));
    }

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $job->status = $request->status;
        $job->is_featured = $request->is_featured;
        $job->save();
        notify()->success('Job Status updated successfully');
        return redirect()->back();

    }
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->back();
    }
}
