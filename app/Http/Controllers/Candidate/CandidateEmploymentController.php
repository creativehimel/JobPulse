<?php

namespace App\Http\Controllers\Candidate;

use App\Models\Industry;
use Illuminate\Http\Request;
use App\Models\CandidateEmployment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CandidateEmploymentController extends Controller
{
    public function index(){
        $emploments = CandidateEmployment::with('industry')->get();
        return view("pages.employment.index", compact("emploments"));
    }

    public function create(){
        $industries = Industry::all();
        return view("pages.employment.create", compact("industries"));
    }

    public function store(Request $request){
        
        $request->validate([
            "company_name"=> "required",
            "industry_id"=> "required",
            "company_location"=> "required",
            "designation"=> "required",
            "department"=> "required",
            "start_date"=> "required",
            "responsibilities"=> "required",
        ]);

        CandidateEmployment::create([
            "company_name"=> $request->company_name,
            "industry_id"=> $request->industry_id,
            "company_location"=> $request->company_location,
            "designation"=> $request->designation,
            "department"=> $request->department,
            "responsibilities"=> $request->responsibilities,
            "start_date"=> date('Y-m-d', strtotime($request->start_date)),
            "end_date"=> date('Y-m-d', strtotime($request->end_date)),
            "user_id"=> Auth::user()->id,
        ]);

        notify()->success("Candidate Employment created successfully.");
        return redirect()->route("employments.index");
    }

    public function edit($id){
        $employment = CandidateEmployment::findOrFail($id);
        $industries = Industry::all();
        return view("pages.employment.edit", compact("employment", "industries"));
    }

    public function update(Request $request, $id){
        $employment = CandidateEmployment::findOrFail($id);
        $request->validate([
            "company_name"=> "required",
            "industry_id"=> "required",
            "company_location"=> "required",
            "designation"=> "required",
            "department"=> "required",
            "start_date"=> "required",
            "responsibilities"=> "required",
        ]);

        $employment->update([
            "company_name"=> $request->company_name,
            "industry_id"=> $request->industry_id,
            "company_location"=> $request->company_location,
            "designation"=> $request->designation,
            "department"=> $request->department,
            "responsibilities"=> $request->responsibilities,
            "start_date"=> date('Y-m-d', strtotime($request->start_date)),
            "end_date"=> date('Y-m-d', strtotime($request->end_date)),
            "user_id"=> Auth::user()->id,
        ]);

        notify()->success("Candidate Employment updated successfully.");
        return redirect()->route("employments.index");
    }

    public function destory($id){
        $employment = CandidateEmployment::findOrFail($id);
        $employment->delete();
        notify()->success("Candidate Employment deleted successfully.");
        return redirect()->route("employments.index");
    }
}
