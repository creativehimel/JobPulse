<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEducation extends Model
{
    use HasFactory;
    protected $fillable = [
        "roll",
        "registration",
        "institute_name",
        "subject",
        "result",
        "passing_year",
        "duration",
        "user_id",
        "degree_level_id",
        "degree_type_id",
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function degreeLevel()
    {
        return $this->belongsTo(DegreeLevel::class);
    }
    public function degreeType()
    {
        return $this->belongsTo(DegreeType::class);
    }
}
