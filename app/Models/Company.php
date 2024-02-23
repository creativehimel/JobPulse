<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        "ceo",
        "no_of_offices",
        "established_in",
        "details",
        "unique_id",
        "recruiter_id",
        "industry_id",
        "ownership_type_id",
        "company_size_id",
        "website",
        "location",
        "is_featured",
        "fax",
        "facebook_url",
        "twitter_url",
        "linkedin_url",
        "google_plus_url",
        "pinterest_url",
    ];

}
