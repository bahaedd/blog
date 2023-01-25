<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'position',
        'company',
        'description',
        'starts',
        'ends',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
