<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CandidateCertificate;
use Illuminate\Support\Facades\File;

class CandidateCertificateController extends Controller
{
    public function index()
    {
        $candidateCerficates = CandidateCertificate::all();
        return view("pages.certificate.index", compact("candidateCerficates"));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            "name" => "required",
            "provider" => "required",
            "image" => "required",
        ]);

        $data = [
            "user_id" => auth()->user()->id,
            "name" => $request->name,
            "provider" => $request->provider,
        ];

        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $image_name = 'certificate-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("images/certificate"), $image_name);
            $data["image"] = $image_name;
        }

        CandidateCertificate::create($data);
        notify()->success("Candidate certificate added successfully");
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());

        $candidateCertificate = CandidateCertificate::findOrFail($id);

        $request->validate([
            "name" => "required",
            "provider" => "required",
        ]);
        $data = [
            "name" => $request->name,
            "provider" => $request->provider,
        ];
        if ($request->hasFile("image")) {

            if ($request->image){
                File::delete(public_path('images/certificate/'.$request->old_image));
            }

            $image = $request->file("image");
            $image_name = 'certificate-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("images/certificate"), $image_name);
            $data["image"] = $image_name;
        }
        
        $candidateCertificate->update($data);

        notify()->success("Candidate certificate updated successfully");
        return redirect()->back();
    }

    public function destroy($id)
    {
        $candidateCertificate = CandidateCertificate::findOrFail($id);
        $candidateCertificate->delete();
        notify()->success("Candidate certificate deleted successfully");
        return redirect()->back();
    }
}
