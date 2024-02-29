<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreeType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'degree_level_id',
        'status',
    ];

    public function degreeLevel()
    {
        return $this->belongsTo(DegreeLevel::class);
    }
    public function job(){
        return $this->hasOne(Job::class);
    }

    public function education()
    {
        return $this->hasOne(CandidateEducation::class);
    }
}
