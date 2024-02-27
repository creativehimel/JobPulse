<?php

namespace App\Models;

use App\Models\JobTag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'slug',
        'description',
        'salary_from',
        'salary_to',
        'position',
        'job_expiry_date',
        'no_preference',
        'hide_salary',
        'is_freelance',
        'status',
        'country_id',
        'city_id',
        'company_id',
        'job_category_id',
        'salary_currency_id',
        'salary_period_id',
        'job_experiance_id',
        'career_level_id',
        'language_level_id',
        'marital_status_id',
        'degree_type_id',
        'job_type_id',
        'job_shift_id',
        'functional_area_id',
    ];
    public function jobTags(){
        return $this->belongsToMany(JobTag::class);
    }
    public function skills(){
        return $this->belongsToMany(Skill::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function jobCategory(){
        return $this->belongsTo(JobCategory::class);
    }
    public function salaryCurrency(){
        return $this->belongsTo(SalaryCurrency::class);
    }
    public function salarayPeriod(){
        return $this->belongsTo(SalaryPeriod::class);
    }
    public function jobExperiance(){
        return $this->belongsTo(JobExperience::class);
    }
    public function careerLevel(){
        return $this->belongsTo(CareerLevel::class);
    }
    public function languageLevel(){
        return $this->belongsTo(LanguageLevel::class);
    }
    public function maritalStatus(){
        return $this->belongsTo(MaritalStatus::class);
    }
    public function degreeType(){
        return $this->belongsTo(DegreeType::class);
    }
    public function jobType(){
        return $this->belongsTo(JobType::class);
    }
    public function jobShift(){
        return $this->belongsTo(JobShift::class);
    }
    public function functionalArea(){
        return $this->belongsTo(FunctionalArea::class);
    }


}
