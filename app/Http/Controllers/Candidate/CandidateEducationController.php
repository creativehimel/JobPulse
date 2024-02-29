<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\CandidateEducation;
use App\Models\DegreeLevel;
use App\Models\DegreeType;
use App\Models\ResultType;
use Illuminate\Http\Request;

class CandidateEducationController extends Controller
{
    public function index(){
        $educations = CandidateEducation::with('user', 'degreeLevel', 'degreeType')->get();
        return view('pages.education', compact('educations'));
    }
    public function create(){
        $resultTypes = ResultType::all();
        $degreeTypes = DegreeType::all();
        $degreeLevels = DegreeLevel::all();
        return view('pages.createEducation', compact('resultTypes', 'degreeTypes', 'degreeLevels'));
    }
    public function store(Request $request){
        $request->validate([
            'roll'=> 'required|string',
            'institute_name'=> 'required|string',
            'degree_type_id'=> 'required',
            'degree_level_id'=> 'required',
            'result_type_id'=> 'required',
            'result'=> 'required',
            'passing_year'=> 'required',
            'duration'=> 'required',
        ]);
        CandidateEducation::create([
            'user_id' => Auth()->user()->id,
            'roll' => $request->roll,
            'registration' => $request->registration,
            'institute_name' => $request->institute_name,
            'degree_type_id' => $request->degree_type_id,
            'degree_level_id' => $request->degree_level_id,
            'result_type_id' => $request->result_type_id,
            'result' => $request->result,
            'passing_year' => $request->passing_year,
            'duration' => $request->duration,
        ]);
        notify()->success('Candidate education information added successfully.');
        return redirect()->route('educations.index');
    }
    public function edit($id){
        $education = CandidateEducation::findOrFail($id);
        $degreeTypes = DegreeType::all();
        $degreeLevels = DegreeLevel::all();
        $resultTypes = ResultType::all(); 
        return view('pages.editEducation', compact('education' , 'degreeTypes', 'degreeLevels', 'resultTypes'));
    }
    public function update(Request $request, $id){
        $education = CandidateEducation::findOrFail($id);
        $request->validate([
            'roll'=> 'required|string',
            'institute_name'=> 'required|string',
            'degree_type_id'=> 'required',
            'degree_level_id'=> 'required',
            'result_type_id'=> 'required',
            'result'=> 'required',
            'passing_year'=> 'required',
            'duration'=> 'required',
        ]);
        $education->update([
            'user_id' => Auth()->user()->id,
            'roll' => $request->roll,
            'registration' => $request->registration,
            'institute_name' => $request->institute_name,
            'degree_type_id' => $request->degree_type_id,
            'degree_level_id' => $request->degree_level_id,
            'result_type_id' => $request->result_type_id,
            'result' => $request->result,
            'passing_year' => $request->passing_year,
            'duration' => $request->duration,
        ]);
        notify()->success('Candidate education information updated successfully.');
        return redirect()->route('educations.index');
    }
    public function destroy($id){
        $education = CandidateEducation::findOrFail($id);
        $education->delete();
        notify()->success('Candidate education information deleted successfully.');
        return redirect()->route('educations.index');
    }
}
