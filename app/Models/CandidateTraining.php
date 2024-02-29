<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateTraining extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "institute_name",
        "start_date",
        "end_date",
        "user_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
