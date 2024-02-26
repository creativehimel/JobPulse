<?php

namespace App\Http\Controllers\Admin\General;

use App\Http\Controllers\Controller;
use App\Models\MaritalStatus;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
    public function index()
    {
        $maritalStatuses = MaritalStatus::orderBy('name', 'asc')->get();

        return view('admin.pages.general.maritalStatus', compact('maritalStatuses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:degree_levels,name',
        ]);
        MaritalStatus::create([
            'name' => $request->name,
        ]);
        notify()->success('Marital status created successfully.');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $maritalStatus = MaritalStatus::findOrfail($id);
        $request->validate([
            'name' => 'required|string|unique:degree_levels,name,'.$maritalStatus->id,
        ]);
        $maritalStatus->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);
        notify()->success('Marital status updated successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        MaritalStatus::where('id', $id)->delete();
        notify()->success('Marital status deleted successfully.');

        return redirect()->back();
    }
}
