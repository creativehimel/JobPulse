<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatePersonalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'father_name',
        'mother_name',
        'dob',
        'nationality',
        'national_id',
        'passport_id',
        'user_id',
        'gender_id',
        'marital_status_id',
        'religion_id',
        'blood_group_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    public function maritalStatus()
    {
        return $this->belongsTo(MaritalStatus::class);
    }
    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }
    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }
}
