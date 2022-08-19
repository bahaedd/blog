<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug) {

        
        $m_category = Category::where('slug', $slug)->first();
        $posts = Post::latest()->get()->where('category_id', $m_category->id);
        $categories = Category::all();
        return view("category", compact("posts", "m_category", "categories"));
    }
}
