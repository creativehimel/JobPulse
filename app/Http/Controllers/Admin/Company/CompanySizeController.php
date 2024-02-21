<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanySize;
use Illuminate\Http\Request;

class CompanySizeController extends Controller
{
    public function index(){
        $companySizes = CompanySize::get();
        return view("admin.pages.company.companySize", compact("companySizes"));
    }
    public function store(Request $request){
        $request->validate([
            "size"=> "required|string|unique:company_sizes,size",
        ]);
        CompanySize::create([
            "size"=> $request->size,
        ]);
        notify()->success("Company size created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $companySize = CompanySize::findOrfail($id);
        $request->validate([
            "size"=> "required|string|unique:company_sizes,size,".$companySize->id,
        ]);
        $companySize->update([
            "size"=> $request->size
        ]);
        notify()->success("Company size updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        CompanySize::findOrfail($id)->delete();
        notify()->success("Company size deleted successfully.");
        return redirect()->back();
    }
}
