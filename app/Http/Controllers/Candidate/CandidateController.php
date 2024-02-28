<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\BloodGroup;
use App\Models\CandidatePersonalInformation;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\Religion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $candidate = CandidatePersonalInformation::with('user', 'gender', 'maritalStatus', 'religion', 'bloodGroup')->where("user_id","=", $id)->get()->first();
        //return $candidate;
        return view('pages.candidateProfile', compact('candidate'));
    }
    public function edit($id)
    {
        $id = Auth::user()->id;
        $candidate = CandidatePersonalInformation::with('user', 'gender', 'maritalStatus', 'religion', 'bloodGroup')->where("user_id","=", $id)->get()->first();
        $genders = Gender::all();
        $religions = Religion::all();
        $maritalStatuses = MaritalStatus::all();
        $bloodGroups = BloodGroup::all();
        return view("pages.editPersonalInfo", compact("candidate", "genders", "religions", "maritalStatuses", "bloodGroups"));
    }
    public function update(Request $request, $id){
        $personalInfo = CandidatePersonalInformation::findOrFail($id);
        $request->validate([
            "name"=> "required",
            "email"=> "required",
            "father_name"=> "required",
            "mother_name"=> "required",
            "gender_id"=> "required",
            "dob"=> "required",
            "religion_id"=> "required",
            "marital_status_id"=> "required",
            "blood_group_id"=> "required",
        ]);
        $user = Auth::user();
        $user->update([
            "name"=> $request->name,
            "email"=> $request->email,
        ]);
        $dob = date('Y-m-d', strtotime($request->dob));
        $personalInfo->update([
            "father_name" => $request->father_name,
            "mother_name"=> $request->mother_name,
            "dob" => $dob,
            "nationality"=> $request->nationality,
            "national_id"=> $request->national_id,
            "passport_id"=> $request->passport_id,
            "user_id"=> $request->user_id,
            "gender_id"=> $request->gender_id,
            "marital_status_id"=> $request->marital_status_id,
            "religion_id"=> $request->religion_id,
            "blood_group_id"=> $request->blood_group_id,
        ]);
        notify()->success('Candidate personal information updated successfully.');
        return redirect()->route('my-profiles.index');
    }
}
