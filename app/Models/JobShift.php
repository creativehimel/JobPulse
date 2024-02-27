<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobShift extends Model
{
    use HasFactory;

    protected $fillable = [
        'shift',
        'description',
    ];
    public function job(){
        return $this->hasOne(Job::class);
    }
}
