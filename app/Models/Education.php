<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'degree',
        'school',
        'description',
        'starts',
        'ends',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
