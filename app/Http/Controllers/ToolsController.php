<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

    //DNS lookup
    public function dnsLookup() {
        $data = [];
        $categories = Category::all();
        return view("blog.tools.dnslookup", compact("categories", "data"));
    }

    public function lookup(Request $request) {

        $this->validate($request, [
            'search' => 'required',
         ]);
        
        $domain = $request->get('search');

        $response = Http::withHeaders([
            'X-Api-Key' => 'VRxSLgGVlgB7uFosZtuUkA==VAnSBjdccOdIoF3d',
             ])->get('https://api.api-ninjas.com/v1/dnslookup', [
            'domain' => $domain,
        ]);
        session(['domain' => $domain]);
        $data = json_decode($response->body(), true);
        $categories = Category::all();
        return view("blog.tools.dnslookup", compact("categories"))->with('data', $data);
    }

    //URL lookup
    public function UrlLookup() {
        $data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,];
        $categories = Category::all();
        return view("blog.tools.urllookup", compact("categories", "data"));
    }

    public function Ulookup(Request $request) {

        $this->validate($request, [
            'search' => 'required',
         ]);
        
        $domain = $request->get('search');

        $response = Http::withHeaders([
            'X-Api-Key' => 'VRxSLgGVlgB7uFosZtuUkA==VAnSBjdccOdIoF3d',
             ])->get('https://api.api-ninjas.com/v1/urllookup', [
            'url' => $domain,
        ]);
        session(['domain' => $domain]);
        $data = json_decode($response->body(), true);
        $data = implode(' ', $data);
        $data = explode(' ', $data);
        // dd($r);
        $categories = Category::all();
        return view("blog.tools.urllookup", compact("categories"))->with('data', $data);
    }
}
