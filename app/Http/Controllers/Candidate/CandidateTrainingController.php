<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\CandidateTraining;
use Auth;
use Illuminate\Http\Request;

class CandidateTrainingController extends Controller
{
    public function index(){
        $trainings = CandidateTraining::all();
        return view("pages.training.index",compact("trainings"));
    }

    public function create(){
        return view("pages.training.create");
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required",
            "description"=> "required",
            "institute_name"=> "required",
            "start_date"=> "required",
            "end_date"=> "required",
        ]);
        CandidateTraining::create([
            "name"=> $request->name,
            "description"=> $request->description,
            "institute_name"=> $request->institute_name,
            "start_date"=> date('Y-m-d', strtotime($request->start_date)),
            "end_date"=> date('Y-m-d', strtotime($request->end_date)),
            "user_id"=> Auth::user()->id,
        ]);
        notify()->success("Candidate training details added successfully.");
        return redirect()->route("trainings.index");
    }
    public function edit($id){
        $training = CandidateTraining::find($id);
        return view("pages.training.edit",compact("training"));
    }

    public function update(Request $request, $id){
        $training = CandidateTraining::findOrFail( $id );
        $request->validate([
            "name"=> "required",
            "description"=> "required",
            "institute_name"=> "required",
            "start_date"=> "required",
            "end_date"=> "required",
        ]);
        $training->update([
            "name"=> $request->name,
            "description"=> $request->description,
            "institute_name"=> $request->institute_name,
            "start_date"=> date('Y-m-d', strtotime($request->start_date)),
            "end_date"=> date('Y-m-d', strtotime($request->end_date)),
            "user_id"=> Auth::user()->id,
        ]);
        notify()->success("Candidate training details updated successfully.");
        return redirect()->route("trainings.index");
    }

    public function destroy($id){
        $training = CandidateTraining::findOrFail( $id );
        $training->delete();
        notify()->success("Candidate training details deleted successfully.");
        return redirect()->route("trainings.index");
    }
}
