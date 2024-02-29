<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use App\Models\CandidateReference;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CandidateRefereceController extends Controller
{
    public function index()
    {
        $refereces = CandidateReference::all();
        return view("pages.referece.index", compact("refereces"));
    }
    public function create(){
        return view("pages.referece.create");
    }

    public function store(Request $request){
        $request->validate([
            "name"=> "required",
            "organization"=> "required",
            "designation"=> "required",
            "address"=> "required",
            "phone"=> "required",
            "email"=> "required",
        ]);
        CandidateReference::create([
            "name"=> $request->name,
            "organization"=> $request->organization,
            "designation"=> $request->designation,
            "address"=> $request->address,
            "phone"=> $request->phone,
            "email"=> $request->email,
            "user_id"=> Auth::user()->id,
        ]);

        notify()->success("Candidate refernce added successfully.");
        return redirect()->route("references.index");
    }

    public function edit($id){
        $reference = CandidateReference::findOrFail($id);
        return view("pages.referece.edit", compact("reference"));
    }

    public function update(Request $request, $id){
        $reference = CandidateReference::findOrFail($id);
        $request->validate([
            "name"=> "required",
            "organization"=> "required",
            "designation"=> "required",
            "address"=> "required",
            "phone"=> "required",
            "email"=> "required",
        ]);
        $reference->update([
            "name"=> $request->name,
            "organization"=> $request->organization,
            "designation"=> $request->designation,
            "address"=> $request->address,
            "phone"=> $request->phone,
            "email"=> $request->email,
            "user_id"=> Auth::user()->id,
        ]);

        notify()->success("Candidate refernce updated successfully.");
        return redirect()->route("references.index");
    }

    public function destroy($id){
        $reference = CandidateReference::findOrFail($id);
        $reference->delete();
       notify()->success("Candidate refernce deleted successfully.");
        return redirect()->route("references.index");
    }
}
