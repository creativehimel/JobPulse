<?php

namespace App\Http\Controllers\Admin\Job;

use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobCategoryController extends Controller
{
    public function index(){
        $jobCategories = JobCategory::orderBy("name","asc")->get();
        return view("admin.pages.job.jobCategory", compact("jobCategories"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|unique:job_categories,name",
        ]);
        JobCategory::create($request->all());
        notify()->success("Job Category created successfully.");
        return redirect()->back();    
    }
    public function update(Request $request, $id){
        $jobCategory = JobCategory::findOrFail($id);
        $request->validate([
            "name"=> "required|string|unique:job_categories,name,".$jobCategory->id,
        ]);
        $jobCategory->update([
            "name"=> $request->name,
            "description" => $request->description,
            "is_featured" => $request->is_featured,
        ]);
        notify()->success("Job category updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        $jobCategory = JobCategory::findOrFail($id);
        $jobCategory->delete();
        notify()->success("Job category deleted successfully.");
        return redirect()->back();
    }
}
