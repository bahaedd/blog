<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalinfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone_number',
        'birthday',
        'linkedin',
        'twitter',
        'github',
        'website',
        'image',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
