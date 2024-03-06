<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_code',
        'phone_code',
    ];

    public function state()
    {
        return $this->hasMany(State::class);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }
    public function job(){
        return $this->hasOne(Job::class);
    }
}
