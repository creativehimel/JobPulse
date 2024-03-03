<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
    public function jobs(){
        return $this->belongsToMany(Job::class);
    }

    public function candidateSkill()
    {
        return $this->hasMany(Skill::class);
    }
}
