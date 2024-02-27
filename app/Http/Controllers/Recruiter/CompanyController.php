<?php

namespace App\Http\Controllers\Recruiter;

use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\Industry;
use App\Models\Recruiter;
use App\Models\CompanySize;
use Illuminate\Http\Request;
use App\Models\OwnershipType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $companyDetails = Company::with('recruiter', 'ownershipType', 'industry', 'companySize', 'city', 'country')->get()->first();

        return view('recruiter.pages.profile', compact('companyDetails'));
    }
    public function edit($id)
    {
        $companyDetails = Company::with('recruiter', 'ownershipType', 'industry', 'companySize', 'city', 'country')->findOrFail($id);
        $industries = Industry::all();
        $ownershipTypes = OwnershipType::all();
        $companySizes = CompanySize::all();
        $cities = City::all();
        $countries = Country::all();

        return view('recruiter.pages.editProfile', compact('companyDetails', 'cities', 'countries', 'industries', 'ownershipTypes', 'companySizes'));
    }
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $company = Company::findOrFail($id);
        $recruiterId = $company->recruiter_id;
        //dd($company);
        $request->validate([
            'ceo' => 'required|string',
            'establishedIn' => 'required',
            'details' => 'required',
            'location' => 'required',
            'no_of_offices' => 'required',
            'industry' => 'required',
            'ownership' => 'required',
            'companySize' => 'required',
            'city'=> 'required',
            'country'=> 'required',
        ]);
       $data = [
           'ceo' => $request->ceo,
           'no_of_offices' => $request->no_of_offices,
           'established_in' => $request->establishedIn,
           'details' => $request->details,
           'recruiter_id' => $recruiterId,
           'industry_id' => $request->industry,
           'ownership_type_id' => $request->ownership,
           'company_size_id' => $request->companySize,
           'city_id' => $request->city,
           'country_id' => $request->country,
           'website' => $request->website,
           'location' => $request->location,
           'fax' => $request->fax,
           'facebook_url' => $request->facebook_url,
           'twitter_url' => $request->twitter_url,
           'linkedin_url' => $request->linkedin_url,
           'google_plus_url' => $request->google_plus_url,
           'pinterest_url' => $request->pinterest_url,
       ];

        if ($request->hasFile('image'))
        {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $fileName = 'post'.'-'.time().'.'.$extension;
            $file->move('uploads/company/', $fileName);
            $data['image'] = $fileName;
        }
        $company->update( $data );
        notify()->success('Company Details updated successfully.');
        return redirect()->route('profiles.index');
    }
}
