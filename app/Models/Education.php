<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'degree',
        'school',
        'description',
        'starts',
        'ends',
    ];

    // public function resume()
    // {
    //     return $this->belongsTo(Resume::class);
    // }
}
