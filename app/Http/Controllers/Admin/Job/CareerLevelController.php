<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\CareerLevel;
use Illuminate\Http\Request;

class CareerLevelController extends Controller
{
    public function index(){
        $careerLevels = CareerLevel::orderBy("name", "asc")->get();
        return view("admin.pages.job.careerLevel", compact("careerLevels"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|unique:career_levels,name",
        ]);
        CareerLevel::create([
            "name"=> $request->name,
        ]);
        notify()->success("Career level created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $careerLevel = CareerLevel::findOrfail($id);
        $request->validate([
            "name"=> "required|string|unique:career_levels,name,".$careerLevel->id,
        ]);
        $careerLevel->update([
            "name"=> $request->name,
            "status" => $request->status
        ]);
        notify()->success("Career leverl updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        $careerLevel = CareerLevel::findOrfail($id);
        $careerLevel->delete();
        notify()->success("Career level deleted successfully.");
        return redirect()->back();
    }
}
