<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
        $recent_posts = Post::latest()->get();
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

        return view("blog.home", compact("latest_posts", "recent_posts", "s_post", "laravel_posts"));
        }

    public function postTemplate() {

        $latest_posts = Post::latest()->get();
        $laravel_posts = Post::where('category_id', '=', 1)->get();
        $s_post = Post::latest()->take(1)->get();
        $recent_posts = Post::latest()->get();
        $title = '{{ $title }}';
        $content = '{{ $content }}';

        return view("blog.post-template", compact("latest_posts", "recent_posts", "s_post", "laravel_posts", "title", "content"));
    }

    public function show($slug) {
        $post = Cache::remember('posts', $slug, function () use ($slug) {
            return Post::where('slug', '=', $slug)->firstOrFail();
        });

        //$post = Post::where('slug', '=', $slug)->firstOrFail();
        $recent_posts = Post::latest()->get();
        seo()
        ->favicon()
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

	    return view('blog.post', compact('post', 'recent_posts'));
    }
}
