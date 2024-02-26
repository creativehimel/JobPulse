<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobCategoryController extends Controller
{
    public function index()
    {
        $jobCategories = JobCategory::orderBy('name', 'asc')->get();

        return view('admin.pages.job.jobCategory', compact('jobCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:job_categories,name',
        ]);
        $slug = Str::slug($request->name);
        JobCategory::create([
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
        ]);
        notify()->success('Job Category created successfully.');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $jobCategory = JobCategory::findOrFail($id);
        $request->validate([
            'name' => 'required|string|unique:job_categories,name,'.$jobCategory->id,
        ]);
        $slug = Str::slug($request->name);
        $jobCategory->update([
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'is_featured' => $request->is_featured,
        ]);
        notify()->success('Job category updated successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $jobCategory = JobCategory::findOrFail($id);
        $jobCategory->delete();
        notify()->success('Job category deleted successfully.');

        return redirect()->back();
    }
}
