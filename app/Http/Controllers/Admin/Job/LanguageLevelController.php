<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\LanguageLevel;
use Illuminate\Http\Request;

class LanguageLevelController extends Controller
{
    public function index(){
        $languageLevels = LanguageLevel::orderBy("name", "asc")->get();
        return view("admin.pages.job.languageLevel", compact("languageLevels"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|unique:language_levels,name",
        ]);
        LanguageLevel::create([
            "name"=> $request->name,
        ]);
        notify()->success("Language levels created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $languageLevel = LanguageLevel::findOrfail($id);
        $request->validate([
            "name"=> "required|string|unique:language_levels,name,".$languageLevel->id,
        ]);
        $languageLevel->update([
            "name"=> $request->name,
            "status" => $request->status
        ]);
        notify()->success("Language levels updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        LanguageLevel::where("id", $id)->delete();
        notify()->success("Language levels deleted successfully.");
        return redirect()->back();
    }
}
