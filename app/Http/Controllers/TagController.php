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
        $p = DB::table('post_tag')->where('id', $tag->id)->first();
        $posts = Post::where('id', $p->post_id)->get();

        return view("blog.tag", compact("tag", "posts");
    }
}
