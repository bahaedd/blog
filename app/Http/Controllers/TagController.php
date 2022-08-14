<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($id) {

        $posts = Post::latest()->get()->where('category_id', $id);

        return view("tag", compact("posts"));
    }
}
