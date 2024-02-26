<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\DegreeLevel;
use Illuminate\Http\Request;

class DegreeLevelController extends Controller
{
    public function index()
    {
        $degreeLevels = DegreeLevel::orderBy('name', 'asc')->get();

        return view('admin.pages.job.degreeLevel', compact('degreeLevels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:degree_levels,name',
        ]);
        DegreeLevel::create([
            'name' => $request->name,
        ]);
        notify()->success('Degree levels created successfully.');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $degreeLevel = DegreeLevel::findOrfail($id);
        $request->validate([
            'name' => 'required|string|unique:degree_levels,name,'.$degreeLevel->id,
        ]);
        $degreeLevel->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);
        notify()->success('Degree levels updated successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        DegreeLevel::where('id', $id)->delete();
        notify()->success('Degree levels deleted successfully.');

        return redirect()->back();
    }
}
