<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $latest_posts = Post::latest()->get();
        $laravel_posts = Post::where('category_id', '=', 1)->get();
        $s_post = Post::latest()->take(1)->get();
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::latest()->get();
        return view("home", compact("latest_posts", "recent_posts", "s_post", "categories", "laravel_posts", "tags"));
    }

    public function show($slug) {

        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $recent_posts = Post::latest()->get();
        $tags = Tag::all();
        $categories = Category::all();
	    return view('post', compact('post', 'recent_posts', 'categories', 'tags'));
    }
}
