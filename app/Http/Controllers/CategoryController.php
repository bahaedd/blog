<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id) {

        $posts = Post::latest()->get()->where('category_id', $id);
        $category = Category::where('id', $id)->first();
        return view("category", compact("posts", "category"));
    }
}
