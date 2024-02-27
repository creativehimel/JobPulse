<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryCurrency extends Model
{
    use HasFactory;

    protected $fillable = [
        'currency_name',
        'currency_icon',
        'currency_code',
        'status',
    ];
    public function job(){
        return $this->hasOne(Job::class);
    }
}
