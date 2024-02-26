<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySize extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
    ];

    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
