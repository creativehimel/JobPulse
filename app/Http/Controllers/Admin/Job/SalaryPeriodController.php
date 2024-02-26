<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\SalaryPeriod;
use Illuminate\Http\Request;

class SalaryPeriodController extends Controller
{
    public function index()
    {
        $salaryPeriods = SalaryPeriod::orderBy('name', 'asc')->get();

        return view('admin.pages.job.salaryPeriod', compact('salaryPeriods'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:career_levels,name',
        ]);
        SalaryPeriod::create([
            'name' => $request->name,
        ]);
        notify()->success('Career level created successfully.');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $salaryPeriod = SalaryPeriod::findOrfail($id);
        $request->validate([
            'name' => 'required|string|unique:career_levels,name,'.$salaryPeriod->id,
        ]);
        $salaryPeriod->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);
        notify()->success('Career leverl updated successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $salaryPeriod = SalaryPeriod::findOrfail($id);
        $salaryPeriod->delete();
        notify()->success('Career level deleted successfully.');

        return redirect()->back();
    }
}
