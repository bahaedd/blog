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

        seo()
        ->title('AlienDev | Email extractorshow')
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

        return view("blog.tag", compact("tag", "posts");
    }
}
