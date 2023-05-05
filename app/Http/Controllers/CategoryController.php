<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug) {
        
        $m_category = Category::where('slug', $slug)->first();
        $posts = Post::latest()->where('category_id', $m_category->id)->paginate(4);

        return view("blog.category", compact("posts", "m_category"));
    }
}
