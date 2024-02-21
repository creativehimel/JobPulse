<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\SalaryCurrency;
use Illuminate\Http\Request;

class SalaryCurrencyController extends Controller
{
    public function index(){
        $salaryCurrencies = SalaryCurrency::orderBy("currency_name", "asc")->get();
        return view("admin.pages.job.salaryCurrency", compact("salaryCurrencies"));
    }
    public function store(Request $request){
        $request->validate([
            "currency_name"=> "required|string|unique:salary_currencies,currency_name",
            "currency_icon"=> "required|string|unique:salary_currencies,currency_icon",
            "currency_code"=> "required|string|unique:salary_currencies,currency_code",
        ]);
        SalaryCurrency::create([
            "currency_name" => $request->currency_name,
            "currency_icon"=> $request->currency_icon,
            "currency_code"=> $request->currency_code,
        ]);
        notify()->success("Salary currency created successfully.");
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $salaryCurrency = SalaryCurrency::findOrfail($id);
        $request->validate([
            "currency_name"=> "required|string|unique:salary_currencies,currency_name,".$salaryCurrency->id,
            "currency_icon"=> "required|string|unique:salary_currencies,currency_icon,".$salaryCurrency->id,
            "currency_code"=> "required|string|unique:salary_currencies,currency_code,".$salaryCurrency->id,
        ]);
        $salaryCurrency->update([
            "currency_name" => $request->currency_name,
            "currency_icon"=> $request->currency_icon,
            "currency_code"=> $request->currency_code,
            "status" => $request->status,
        ]);
        notify()->success("Salary currency updated successfully.");
        return redirect()->back();
    }
    public function destroy($id){
        SalaryCurrency::findOrFail($id)->delete();
        notify()->success("Salary currency deleted successfully.");
        return redirect()->back();
    }

}
