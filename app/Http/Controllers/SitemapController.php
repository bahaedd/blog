<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Tool;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


class SitemapController extends Controller
{

    
    public function index(Request $r)
    {      
        $posts = Post::orderBy('id','desc')->where('status', 'PUBLISHED')->get();
        $tags = Tag::all();
        $tools = Tool::all();

        return response()->view('blog.sitemap', compact('posts', 'tags', 'tools'))
          ->header('Content-Type', 'text/xml');

    }

    public function about()
    {
        $name = "Bahaeddine";
        $profession = "Full Stack Web Developer";

        $data = [
          "preferredStack"=> "LAMP Stack, TALL Stack",
          "hasUsed"=> "Laravel, Livewire, TailwindCSS, VueJS, AlpineJS"
        ];

        return view('about');

    }
}