<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEmployment extends Model
{
    use HasFactory;

    protected $fillable = [
        "company_name",
        "company_location",
        "designation",
        "department",
        "industry_id",
        "user_id",
        "start_date",
        "end_date",
        "responsibilities",
        "is_working",
    ];

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
