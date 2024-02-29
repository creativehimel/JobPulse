<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function company()
    {
        return $this->hasOne(Company::class);
    }

    public function employment()
    {
        return $this->hasMany(CandidateEmployment::class);
    }
}
