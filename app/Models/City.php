<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function company(){
        return $this->hasOne(Company::class);
    }
    public function job(){
        return $this->hasOne(Job::class);
    }
}
