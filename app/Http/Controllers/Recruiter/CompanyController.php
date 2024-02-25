<?php

namespace App\Http\Controllers\Recruiter;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companyDetails = Company::with('recruiter', 'ownershipType', 'industry', 'companySize', 'city', 'country')->get()->first();
        return view("recruiter.pages.profile", compact("companyDetails"));
    }
}
