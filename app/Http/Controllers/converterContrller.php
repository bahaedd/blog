<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class converterContrller extends Controller
{
    public function index() {

        return view("blog.toolsv2.converter");
    }
}
