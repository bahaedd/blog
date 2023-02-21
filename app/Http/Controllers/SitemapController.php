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
        $categories = Category::all();
        $tags = Tag::all();
        $tools = Tool::all();

        return response()->view('blog.sitemap', compact('posts', 'categories', 'tags', 'tools'))
          ->header('Content-Type', 'text/xml');

    }

    public function about()
    {
        $categories = Category::all();
        return view('blog.about', compact('categories'));

    }
}