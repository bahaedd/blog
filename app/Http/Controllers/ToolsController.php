<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ToolsController extends Controller
{
    //main page
    public function index() {

        $categories = Category::all();
        $tools = Tool::all();
        return view("blog.tools.mailerpack", compact("categories", "tools"));
    }


    //ip extractor
    public function extractor() {

        $categories = Category::all();
        $ipmatch = [];
        return view("blog.tools.ipextractor", compact("ipmatch", "categories"));
    }
    public function extract(Request $request) {
        // Form validation
        $this->validate($request, [
            'text' => 'required',
         ]);
        
        $text = $request->get('text');
        $reccord= $text;
        $regexIpAddress = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(?:\/\d{2})?/';
        $categories = Category::all();
         preg_match_all($regexIpAddress, $reccord, $ip_match);
         
         $ipmatch = Arr::collapse($ip_match);

        return view("blog.tools.ipextractor", compact("ipmatch", "categories"));
    }

    //Domain extractor
    public function domainExtractor() {

        $categories = Category::all();
        $Dmatch = [];
        return view("blog.tools.domainextractor", compact("Dmatch", "categories"));
    }
    public function extractDomain(Request $request) {
        // Form validation
        $this->validate($request, [
            'text' => 'required',
         ]);
        
        $text = $request->get('text');
        $reccord= $text;
        $regexIpAddress = '/([a-z0-9][a-z0-9\-]{0,61}[a-z0-9]\.)+[a-z0-9][a-z0-9\-]*[a-z0-9]/';
        $categories = Category::all();
         preg_match_all($regexIpAddress, $reccord, $ip_match);
         
         $Dmatch = Arr::collapse($ip_match);

        return view("blog.tools.domainextractor", compact("Dmatch", "categories"));
    }
}
