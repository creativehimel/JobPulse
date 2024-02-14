<?php

namespace App\Http\Controllers\Admin\General;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function index(){
        $skills = Skill::orderBy('name', 'asc')->get();
        return view("admin.pages.general.skill", compact("skills"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|unique:skills,name",
        ]);
        $skill = Skill::create([
            "name"=> $request->name,
            "description" => $request->description,
        ]);
        notify()->success("Skill created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $skill = Skill::findOrFail($id);
        $request->validate([
            "name"=> "required|string|unique:skills,name,".$skill->id,
        ]);
        $skill->update([
            "name"=> $request->name,
            "description"=> $request->description,
        ]);
        notify()->success("Skill updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        $skill = Skill::findOrFail($id);
        $skill->delete();
        notify()->success("Skill deleted successfully.");
        return redirect()->back();
    }

}
