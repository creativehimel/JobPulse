<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreeLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    public function degreeType()
    {
        return $this->hasMany(DegreeType::class);
    }
    public function education()
    {
        return $this->hasOne(CandidateEducation::class);
    }
}
