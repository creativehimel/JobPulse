<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\CandidateSkill;
use App\Models\Skill;
use Illuminate\Http\Request;

class CandidateSkillController extends Controller
{
    public function index(){
        $candidateSkills = CandidateSkill::all();
        $skills = Skill::all();
        return view('pages.skill.index', compact('candidateSkills', 'skills')); 
    }
    public function store(Request $request){
        $request->validate([
            'skill_id' => 'required',
        ]);
        
        CandidateSkill::create([
            'user_id' => auth()->user()->id,
            'skill_id' => $request->skill_id
        ]);
        notify()->success('Skill Added Successfully');
        return back();
    }

    public function update(Request $request, $id){
        $candidateSkill = CandidateSkill::findOrFail($id);
        $request->validate([
            'skill_id' => 'required',
        ]);
        $candidateSkill->update([
            'user_id' => auth()->user()->id,
            'skill_id' => $request->skill_id
        ]);
        notify()->success('Skill Updated Successfully');
        return back();
        
    }
    public function destroy($id){
        $candidateSkill = CandidateSkill::findOrFail($id);
        $candidateSkill->delete();
        notify()->success('Skill Deleted Successfully');
        return back();
    }
}
