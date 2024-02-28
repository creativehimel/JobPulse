<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'unique_id',
        'father_name',
        'mother_name',
        'marital_status_id',
        'nationality',
        'national_id_card',
        'experience',
        'career_level_id',
        'industry_id',
        'functional_area_id',
        'current_salary',
        'expected_salary',
        'salary_currency',
        'address',
        'immediate_available',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function maritalStatus()
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function careerLevel()
    {
        return $this->belongsTo(CareerLevel::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function functionalArea()
    {
        return $this->belongsTo(FunctionalArea::class);
    }
}
