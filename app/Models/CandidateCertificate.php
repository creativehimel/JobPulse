<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'provider',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
