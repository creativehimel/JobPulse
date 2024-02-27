<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryPeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];
    public function job(){
        return $this->hasOne(Job::class);
    }
}
