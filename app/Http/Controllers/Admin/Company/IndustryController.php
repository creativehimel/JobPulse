<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index(){
        $industries = Industry::orderBy("name", "asc")->get();
        return view("admin.pages.company.industry", compact("industries"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|unique:ownership_types,name",
        ]);
        Industry::create([
            "name"=> $request->name,
            "description" => $request->description,
        ]);
        notify()->success("Inductry created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $industry = Industry::findOrFail($id);
        $request->validate([
            "name"=> "required|string|unique:ownership_types,name,".$industry->id,
        ]);
        $industry->update([
            "name"=> $request->name,
            "description"=> $request->description,
        ]);
        notify()->success("Inductry updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        Industry::findOrFail($id)->delete();
        notify()->success("Inductry deleted successfully.");
        return redirect()->back();
    }
}
