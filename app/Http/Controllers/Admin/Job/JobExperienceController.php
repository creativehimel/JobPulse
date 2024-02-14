<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\JobExperience;
use Illuminate\Http\Request;

class JobExperienceController extends Controller
{
    public function index(){
        $experiences = JobExperience::orderBy("name", "asc")->get();
        return view("admin.pages.job.jobExperience", compact("experiences"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|unique:job_experiences,name",
        ]);
        $job = JobExperience::create($request->all());
        notify()->success("Job experience created successfully");
        return redirect()->back();
    }
    public function update(Request $request, $id){

        $experience = JobExperience::findOrfail($id);
        $request->validate([
            "name"=> "required|string|unique:job_experiences,name,".$experience->id,
        ]);
        $experience->update([
            "name"=> $request->name,
            "status" => $request->status,
        ]);
        notify()->success("Job experience updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        $experience = JobExperience::findOrfail($id);
        $experience->delete();
        notify()->success("Job experience deleted successfully.");
        return redirect()->back();
    }
}
