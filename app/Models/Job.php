<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'job_tag_id',
        'language_level_id',
        'marital_status_id',
        'degree_type_id',
        'job_type_id',
        'job_shift_id',
        'job_skill_id',
        'functional_area_id',
    ];
}
