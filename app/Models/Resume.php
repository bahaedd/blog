<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function personal_informations()
    {
        return $this->hasMany(PersonalInformations::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
