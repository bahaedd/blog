<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalinfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'address',
        'nationality',
        'phone_number',
        'birthday',
        'linkedin',
        'twitter',
        'github',
        'website',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
