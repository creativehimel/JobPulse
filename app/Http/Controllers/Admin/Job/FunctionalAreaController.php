<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\FunctionalArea;
use Illuminate\Http\Request;

class FunctionalAreaController extends Controller
{
    public function index(){
        $functionalAreas = FunctionalArea::orderBy("name","asc")->get();
        return view("admin.pages.job.functionalArea", compact("functionalAreas"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|unique:functional_areas,name",
        ]);
        FunctionalArea::create([
            "name"=> $request->name
        ]);
        notify()->success("Functiona area created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $functionalArea = FunctionalArea::findOrfail($id);
        $request->validate([
            "name"=> "required|string|unique:functional_areas,name,".$functionalArea->id,
        ]);
        $functionalArea->update([
            "name"=> $request->name,
            "status" => $request->status
        ]);
        notify()->success("Functiona area updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        FunctionalArea::findOrfail($id)->delete();
        notify()->success("Functiona area deleted successfully.");
        return redirect()->back();
    }
}
