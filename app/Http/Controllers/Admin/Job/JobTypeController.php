<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\JobType;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{
    public function index(){
        $jobTypes = JobType::orderBy("name", "asc")->get();
        return view("admin.pages.job.jobType", compact("jobTypes"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|unique:job_types,name",
        ]);
        JobType::create([
            "name"=> $request->name,
            "description" => $request->description,
        ]);
        notify()->success("Job type created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $jobType = JobType::findOrfail($id);
        $request->validate([
            "name"=> "required|string|unique:job_types,name,".$jobType->id,
        ]);
        $jobType->update([
            "name"=> $request->name,
            "description"=> $request->description,
        ]);
        notify()->success("Job type updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        $jobType = JobType::findOrfail($id);
        $jobType->delete();
        notify()->success("Job type deleted successfully.");
        return redirect()->back();
    }
}
