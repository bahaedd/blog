<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use SEOMeta;

class PostController extends Controller
{

    public static function boot()
	{
	    parent::boot();

	    static::updating(function ($instance) {
	        // update cache content
	        Cache::put('posts.'.$instance->slug,$instance);
	    });

	    static::deleting(function ($instance) {
	        // delete post cache
	        Cache::forget('posts.'.$instance->slug);
	    });
	}
    
    public function index() {

        $latest_posts = Post::latest()->get();
        $laravel_posts = Post::where('category_id', '=', 1)->get();
        $s_post = Post::latest()->take(1)->get();
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::latest()->get();
        SEOMeta::setDefaults([
        'title' => 'Your specific homepage title',
        'description' => 'Your specific homepage description',
        // Override any other default values as needed
        ]);
            return view("blog.home", compact("latest_posts", "recent_posts", "s_post", "categories", "laravel_posts", "tags"));
        }

    public function postTemplate() {

        $latest_posts = Post::latest()->get();
        $laravel_posts = Post::where('category_id', '=', 1)->get();
        $s_post = Post::latest()->take(1)->get();
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::latest()->get();
        $title = '{{ $title }}';
        $content = '{{ $content }}';

        return view("blog.post-template", compact("latest_posts", "recent_posts", "s_post", "categories", "laravel_posts", "tags", "title", "content"));
    }

    public function show($slug) {
        $post = Cache::remember('posts', $slug, function () use ($slug) {
            return Post::where('slug', '=', $slug)->firstOrFail();
        });

        //$post = Post::where('slug', '=', $slug)->firstOrFail();
        $recent_posts = Post::latest()->get();
        $tags = Tag::all();
        $categories = Category::all();
	    return view('blog.post', compact('post', 'recent_posts', 'categories', 'tags'));
    }
}
