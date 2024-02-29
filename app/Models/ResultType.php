<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultType extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
    ];
    public function education()
    {
        return $this->hasOne(CandidateEducation::class);
    }
}
