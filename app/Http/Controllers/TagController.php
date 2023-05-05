<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function index($slug) {

        $tag = Tag::where('slug', $slug)->first();
        $posts = $tag->posts()->latest()->paginate(8);

        return view("blog.tag", compact("tag", "posts");
    }
}
