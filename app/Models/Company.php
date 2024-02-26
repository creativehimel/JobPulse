<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'ceo',
        'no_of_offices',
        'established_in',
        'details',
        'unique_id',
        'recruiter_id',
        'industry_id',
        'ownership_type_id',
        'company_size_id',
        'city_id',
        'country_id',
        'website',
        'location',
        'is_featured',
        'is_active',
        'fax',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'google_plus_url',
        'pinterest_url',
    ];

    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class);
    }

    public function ownershipType()
    {
        return $this->belongsTo(OwnershipType::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function companySize()
    {
        return $this->belongsTo(CompanySize::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
