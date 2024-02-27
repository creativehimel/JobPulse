<?php

namespace App\Http\Controllers\Recruiter;

use App\Models\Job;
use App\Models\City;
use App\Models\Skill;
use App\Models\Gender;
use App\Models\JobTag;
use App\Models\Country;
use App\Models\JobType;
use App\Models\JobShift;
use App\Models\Recruiter;
use App\Models\DegreeType;
use App\Models\CareerLevel;
use App\Models\JobCategory;
use Illuminate\Support\Str;
use App\Models\SalaryPeriod;
use Illuminate\Http\Request;
use App\Models\JobExperience;
use App\Models\LanguageLevel;
use App\Models\MaritalStatus;
use App\Models\FunctionalArea;
use App\Models\SalaryCurrency;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

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
        $degreeTypes = DegreeType::all();
        $functionalAreas = FunctionalArea::all();
        $jobExperiences = JobExperience::all();
        $maritalStatuses = MaritalStatus::all();
        $languageLevels = LanguageLevel::all();

        return view('recruiter.pages.createJob', compact('jobTypes', 'jobCategories', 'jobSkills', 'genders', 'salaryCurrencies', 'salaryPeriods', 'countries', 'cities', 'careerLevels', 'jobShifts', 'jobTags', 'degreeTypes', 'functionalAreas', 'jobExperiences', 'maritalStatuses', 'languageLevels'));
    }
    public function store(Request $request){
        if($request->hide_salary != 1){
            $hide_salary = 0;
        }else{
            $hide_salary = 1;
        }
        $request->validate([
            'job_title'=> 'required|unique:jobs,job_title',
            'description'=> 'required|string',
            'salary_from'=> 'required|string',
            'salary_to'=> 'required|string',
            'position'=> 'required|string',
            'job_expiry_date'=> 'required|date',
            'country_id'=> 'required|string',
            'city_id'=> 'required|string',
            'job_category_id'=> 'required|string',
            'salary_currency_id'=> 'required|string',
            'salary_period_id'=> 'required|string',
            'job_experiance_id'=> 'required|string',
            'career_level_id'=> 'required|string',
            'language_level_id'=> 'required|string',
            'marital_status_id'=> 'required|string',
            'degree_type_id'=> 'required|string',
            'job_type_id'=> 'required|string',
            'job_shift_id'=> 'required|string',
            'functional_area_id'=> 'required|string',
            'gender_id'=> 'required',
        ]);

        $job_expiry_date = date('Y-m-d', strtotime($request->job_expiry_date));
        $job_slug = Str::slug($request->job_title);
        $recruiterId = Auth::guard('recruiter')->user()->id;
        $recruiter = Recruiter::with('company')->findOrfail($recruiterId);
        $companyId = $recruiter->company->id;
        $job = Job::create([
            'job_title' => $request->job_title,
            'slug' => $job_slug,
            'description'=> $request->description,
            'salary_from' => $request->salary_from,
            'salary_to'=> $request->salary_to,
            'position'=> $request->position,
            'job_expiry_date'=> $job_expiry_date,
            'hide_salary'=> $hide_salary,
            'country_id'=> $request->country_id,
            'city_id'=> $request->city_id,
            'company_id'=> $companyId,
            'job_category_id'=> $request->job_category_id,
            'salary_currency_id'=> $request->salary_currency_id,
            'salary_period_id'=> $request->salary_period_id,
            'job_experiance_id' => $request->job_experiance_id,
            'career_level_id'=> $request->career_level_id,
            'language_level_id'=> $request->language_level_id,
            'marital_status_id'=> $request->marital_status_id,
            'degree_type_id'=> $request->degree_type_id,
            'job_type_id'=> $request->job_type_id,
            'job_shift_id'=> $request->job_shift_id,
            'functional_area_id'=> $request->functional_area_id,
            'gender_id'=> $request->gender_id,
        ]);

        if (isset($request->tags)) {
            $tags = array_map(function ($tagName) {
                $tag = JobTag::firstOrCreate(['name' => $tagName]);
                return $tag->id;
            }, $request->tags);
            $job->jobTags()->attach($tags);
        }
        if (isset($request->skills)) {
            $skills = array_map(function ($skillName) {
                $skills = Skill::firstOrCreate(['name' => $skillName]);
                return $skills->id;
            }, $request->skills);
            $job->skills()->attach($skills);
        }
        notify()->success('Job created successfully.');
        return redirect()->route('jobs.index');
    }
}
