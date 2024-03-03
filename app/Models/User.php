<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function personalInfo()
    {
        return $this->hasOne(CandidatePersonalInformation::class);
    }

    public function education()
    {
        return $this->hasMany(CandidateEducation::class);
    }

    public function training()
    {
        return $this->hasMany(CandidateTraining::class);
    }
    public function employment()
    {
        return $this->hasMany(CandidateEmployment::class);
    }

    public function reference()
    {
        return $this->hasMany(CandidateReference::class);
    }

    public function candidateSkill()
    {
        return $this->hasMany(CandidateSkill::class);
    }
}
