<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Commentable, Searchable;

    protected $fillable = [
        'title',
        'image',
        'body',
        'status',
        'slug',
        'seo_title',
        'featured',
    ];

    public function toSearchableArray(){
        return [
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
