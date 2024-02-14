<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\JobShift;
use Illuminate\Http\Request;

class JobShiftController extends Controller
{
    public function index(){
        $jobShifts = JobShift::orderBy("shift", "asc")->get();
        return view("admin.pages.job.jobShift", compact("jobShifts"));
    }
    public function store(Request $request){
        
        $request->validate([
            "shift"=> "required|string|unique:job_shifts,shift",
        ]);
        $jobShift = JobShift::create([
            "shift" => $request->shift,
            "description" => $request->description,
        ]);
        notify()->success("Job shift created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $jobShift = JobShift::findOrfail($id);
        $request->validate([
            "shift"=> "required|string|unique:job_shifts,shift,".$jobShift->id,
        ]);
        $jobShift->update([
            "shift" => $request->shift,
            "description"=> $request->description,
        ]);
        notify()->success("Job shift updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        $jobShift = JobShift::findOrfail($id);
        $jobShift->delete();
        notify()->success("Job shift deleted successfully.");
        return redirect()->back();
    }

}
