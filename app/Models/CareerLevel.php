<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerLevel extends Model
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
