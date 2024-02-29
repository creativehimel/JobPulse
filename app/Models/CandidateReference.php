<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateReference extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "organization",
        "designation",
        "address",
        "phone",
        "email",
        "user_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
