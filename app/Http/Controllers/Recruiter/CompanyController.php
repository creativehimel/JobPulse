<?php

namespace App\Http\Controllers\Recruiter;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Company;
use App\Models\CompanySize;
use App\Models\Country;
use App\Models\Industry;
use App\Models\OwnershipType;

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
}
