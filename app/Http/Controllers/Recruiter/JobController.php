<?php

namespace App\Http\Controllers\Recruiter;

use App\Http\Controllers\Controller;
use App\Models\CareerLevel;
use App\Models\City;
use App\Models\Country;
use App\Models\DegreeLevel;
use App\Models\FunctionalArea;
use App\Models\Gender;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobExperience;
use App\Models\JobShift;
use App\Models\JobTag;
use App\Models\JobType;
use App\Models\SalaryCurrency;
use App\Models\SalaryPeriod;
use App\Models\Skill;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->get();

        return view('recruiter.pages.job', compact('jobs'));
    }

    public function create()
    {
        $jobTypes = JobType::all();
        $jobCategories = JobCategory::all();
        $jobSkills = Skill::all();
        $genders = Gender::all();
        $salaryCurrencies = SalaryCurrency::all();
        $salaryPeriods = SalaryPeriod::all();
        $countries = Country::all();
        $cities = City::all();
        $careerLevels = CareerLevel::all();
        $jobShifts = JobShift::all();
        $jobTags = JobTag::all();
        $degreeLevels = DegreeLevel::all();
        $functionalAreas = FunctionalArea::all();
        $jobExperiences = JobExperience::all();

        return view('recruiter.pages.createJob', compact('jobTypes', 'jobCategories', 'jobSkills', 'genders', 'salaryCurrencies', 'salaryPeriods', 'countries', 'cities', 'careerLevels', 'jobShifts', 'jobTags', 'degreeLevels', 'functionalAreas', 'jobExperiences'));
    }
}
