<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class SitemapController extends Controller
{

    
    public function index(Request $r)
    {
       
        $posts = Post::orderBy('id','desc')->where('status', 'PUBLISHED')->get();

        return response()->view('blog.sitemap', compact('posts'))
          ->header('Content-Type', 'text/xml');

    }

    public function about()
    {
        $categories = Category::all();
        return view('blog.about', compact('categories'));

    }
}