<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\DegreeType;
use Illuminate\Http\Request;

class DegreeTypeController extends Controller
{
    public function index(){
        $degreeTypes = DegreeType::with('degreeLevel')->orderBy('name','asc')->get();
        //return $degreeTypes;
        return view("admin.pages.job.degreeType", compact("degreeTypes"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|unique:degree_types,name",
            "degree_level_id"=> "required|string",
        ]);
        DegreeType::create([
            "name"=> $request->name,
            "degree_level_id"=> $request->degree_level_id,
        ]);
        notify()->success("Degree type created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $degreeType = DegreeType::findOrfail($id);
        $request->validate([
            "name"=> "required|string|unique:degree_types,name,".$degreeType->id,
            "degree_level_id"=> "required|string",
        ]);
        notify()->success("Degree type updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        DegreeType::findOrfail($id)->delete();
        notify()->success("Degree type deleted successfully.");
        return redirect()->back();
    }

}
