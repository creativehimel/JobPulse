<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\JobTag;
use Illuminate\Http\Request;

class JobTagsController extends Controller
{
    public function index()
    {
        $tags = JobTag::orderBy('name', 'asc')->get();

        return view('admin.pages.job.jobTag', compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:job_tags,name',
        ]);
        JobTag::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        notify()->success('Job tags created successfully.');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $tag = JobTag::findOrFail($id);
        $request->validate([
            'name' => 'required|string|unique:job_tags,name,'.$tag->id,
        ]);
        $tag->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        notify()->success('Job tag updated successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $jobTag = JobTag::findOrFail($id);
        $jobTag->delete();
        notify()->success('Job tag deleted successfully.');

        return redirect()->back();
    }
}
