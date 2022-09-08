<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use Illuminate\Http\Request;


class SitemapController extends Controller
{

    
    public function index(Request $r)
    {
       
        $posts = Post::orderBy('id','desc')->where('status', 'PUBLISHED')->get();

        return response()->view('blog.sitemap', compact('posts'))
          ->header('Content-Type', 'text/xml');

    }
}