<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'position',
        'company',
        'description',
        'starts',
        'ends',
    ];

    // public function resume()
    // {
    //     return $this->belongsTo(Resume::class);
    // }
}
