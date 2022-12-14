<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Crypt;
use Ipdata\ApiClient\Ipdata;
use Symfony\Component\HttpClient\Psr18Client;
use Nyholm\Psr7\Factory\Psr17Factory;
use Illuminate\Support\Facades\Hash;

class ToolsController extends Controller
{

    //         ######################### MailerPack ################################ 

    //MailerPack
    public function index() {

        $tools = Tool::where('pack', 'MailerPack')->get();
        return view("blog.tools.mailerpack", compact("tools"));
    }

    //ip extractor
    public function extractor() {

        $ipmatch = [];
        return view("blog.tools.ipextractor", compact("ipmatch"));
    }
    public function extract(Request $request) {
        // Form validation
        $this->validate($request, [
            'text' => 'required',
         ]);
        
        $text = $request->get('text');
        $reccord= $text;
        $regexIpAddress = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(?:\/\d{2})?/';
         preg_match_all($regexIpAddress, $reccord, $ip_match);
         
         $ipmatch = Arr::collapse($ip_match);
         if(empty($ipmatch)){
            $ipmatch = ['0' => 'No IP Address Found!'];
         }

        return view("blog.tools.ipextractor", compact("ipmatch"));
    }

    //Domain extractor
    public function domainExtractor() {

        $Dmatch = [];
        return view("blog.tools.domainextractor", compact("Dmatch"));
    }
    public function extractDomain(Request $request) {
        // Form validation
        $this->validate($request, [
            'text' => 'required',
         ]);
        
        $text = $request->get('text');
        $reccord= $text;
        $regexIpAddress = '/([a-z0-9][a-z0-9\-]{0,61}[a-z0-9]\.)+[a-z0-9][a-z0-9\-]*[a-z0-9]/';
        preg_match_all($regexIpAddress, $reccord, $ip_match);
        $Dmatch = Arr::collapse($ip_match);
        if(empty($Dmatch)){
            $Dmatch = ['0' => 'No Domain name Found!'];
         }

        return view("blog.tools.domainextractor", compact("Dmatch"));
    }

    //DNS lookup
    public function dnsLookup() {
        $data = [];
        return view("blog.tools.dnslookup", compact("data"));
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
        return view("blog.tools.dnslookup")->with('data', $data);
    }

    //URL lookup
    public function UrlLookup() {
        $data = [
          "is_valid"=> "",
          "country"=> "",
          "country_code"=> "",
          "region_code"=> "",
          "region"=> "",
          "city"=> "",
          "zip"=> "",
          "lat"=> "",
          "lon"=> "",
          "timezone"=> "",
          "isp"=> "",
          "url"=> ""
        ];
        $hidden = "hidden";
        return view("blog.tools.urllookup", compact("data", "hidden"));
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
        $hidden = "";
        return view("blog.tools.urllookup", compact("hidden"))->with('data', $data);
    }

     //URL lookup
    public function IpLookup() {
        $data = [
          "is_valid"=> "",
          "country"=> "",
          "country_code"=> "",
          "region_code"=> "",
          "region"=> "",
          "city"=> "",
          "zip"=> "",
          "lat"=> "",
          "lon"=> "",
          "timezone"=> "",
          "isp"=> "",
          "url"=> ""
        ];
        $hidden = "hidden";
        return view("blog.tools.iplookup", compact("data", "hidden"));
    }

    public function Ilookup(Request $request) {

        $this->validate($request, [
            'search' => 'required',
         ]);
        
        $ip = $request->get('search');

        $response = Http::withHeaders([
            'X-Api-Key' => 'VRxSLgGVlgB7uFosZtuUkA==VAnSBjdccOdIoF3d',
             ])->get('https://api.api-ninjas.com/v1/iplookup', [
            'address' => $ip,
        ]);
        session(['ip' => $ip]);
        $data = json_decode($response->body(), true);
        $hidden = "";
        return view("blog.tools.iplookup", compact("hidden"))->with('data', $data);
    }

    //Random Generator
    public function RandomGenerator() {

        $randomString = '';
        return view("blog.tools.randomgenerator", compact("randomString"));
    }

    public function GenerateRandom(Request $request) {
        
        $this->validate($request, [
            'length' => 'required|max:70',
            'string' => 'required'
         ]);

        
            $charactersAll = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersUpper = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersUpperOnly = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLower = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLowerOnly = 'abcdefghijklmnopqrstuvwxyz';
            $charactersNumOnly = '0123456789';
            $charactersChar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            $randomString = '';


            if(count($request->get('string')) == 3){
                for ($i = 0; $i < $request->get('length'); $i++) {
                    $index = rand(0, strlen($charactersAll) - 1);
                    $randomString .= $charactersAll[$index];
                    }
            }

            if(count($request->get('string')) == 2){

                if(!in_array('lower', $request->get('string'))){
                    for ($i = 0; $i < $request->get('length'); $i++) {
                    $index = rand(0, strlen($charactersUpper) - 1);
                    $randomString .= $charactersUpper[$index];
                    }
                    }
                else if(!in_array('upper', $request->get('string'))){
                    for ($i = 0; $i < $request->get('length'); $i++) {
                    $index = rand(0, strlen($charactersLower) - 1);
                    $randomString .= $charactersLower[$index];
                    }
                  }
                else if(!in_array('numbers', $request->get('string'))){
                    for ($i = 0; $i < $request->get('length'); $i++) {
                    $index = rand(0, strlen($charactersChar) - 1);
                    $randomString .= $charactersChar[$index];
                    }
                    }
            }
            if(count($request->get('string')) == 1){

                if(in_array('lower', $request->get('string'))){
                    for ($i = 0; $i < $request->get('length'); $i++) {
                    $index = rand(0, strlen($charactersLowerOnly) - 1);
                    $randomString .= $charactersLowerOnly[$index];
                    }
                    }
                else if(in_array('upper', $request->get('string'))){
                    for ($i = 0; $i < $request->get('length'); $i++) {
                    $index = rand(0, strlen($charactersUpperOnly) - 1);
                    $randomString .= $charactersUpperOnly[$index];
                    }
                  }
                else if(in_array('numbers', $request->get('string'))){
                    for ($i = 0; $i < $request->get('length'); $i++) {
                    $index = rand(0, strlen($charactersNumOnly) - 1);
                    $randomString .= $charactersNumOnly[$index];
                    }
                    }
            }
        
        return view("blog.tools.randomgenerator", compact("randomString"));
    }

    //User Generator
    public function UserGenerator() {
        
        $randomUser = 'hidden';
        $data = [
          "name"=> "",
          "username"=> "",
          "address"=> "",
          "email"=> "",
          "sex"=> "",
          "birthday"=> "",
        ];

        return view("blog.tools.randomuser", compact("randomUser", "data"));
    }
    public function GenerateRandomUser(Request $request) {

        $response = Http::withHeaders([
            'X-Api-Key' => 'VRxSLgGVlgB7uFosZtuUkA==VAnSBjdccOdIoF3d',
             ])->get('https://api.api-ninjas.com/v1/randomuser');
        
        $data = json_decode($response->body(), true);
        $randomUser = '';

        return view("blog.tools.randomuser", compact("randomUser", "data"));
    }

    //Password Generator
    public function PasswordGenerator() {
        
        $HashedPass = '';
        $hidden = 'hidden';

        return view("blog.tools.passwordgenerator", compact("HashedPass", "hidden"));
    }
    public function GeneratePassword(Request $request) {

       $this->validate($request, [
            'text' => 'required',
         ]);
       $HashedPass = Hash::make($request->get('text'));
        $hidden = '';

        return view("blog.tools.passwordgenerator", compact("HashedPass", "hidden"));
    }

    //Encode-Decode
    public function EncodeDecode() {

        $hidden = 'hidden';
        $string = '';
        return view("blog.tools.endecode", compact("hidden", "string"));
    }

    public function Encode(Request $request) {
        
        $this->validate($request, [
            'text' => 'required',
         ]);

        $hidden = '';
        
        if ($request->get('encode') == 1){
            $string = base64_encode($request->get('text'));
        }else {
            $string = base64_decode($request->get('text'));
        }

        return view("blog.tools.endecode", compact("hidden", "string"));
    }

    //Domain reputation
    public function DomainReputation() {

        $hidden = 'hidden';
        $result = [
          "reputationScore"=> "",
          "mode"=> "", 
        ];

        return view("blog.tools.domainreputation", compact("hidden", "result"));
    }

    public function CheckDomain(Request $request) {

        $hidden = '';
        $this->validate($request, [
            'domain' => 'required',
         ]);

        $httpClient = new Psr18Client();
        $psr17Factory = new Psr17Factory();
        $ipdata = new Ipdata('370ee16e655a378ec01d3dc8629129db142f4721d81035c8d81dbe40', $httpClient, $psr17Factory); 

       $data = $ipdata->threat_score('69.78.70.144');
       $result = json_encode($data, JSON_PRETTY_PRINT);
       dd($result);
        
        return view("blog.tools.domainreputation", compact("hidden", "result"));
    }

    //         ######################### PersonalPack ################################


    //PersonalPack
    public function PeronalPack() {

        $tools = Tool::where('pack', 'PersonalPack')->get();
        return view("blog.tools.personalpack", compact("tools"));
    }

    //TodoApp
    public function TodoApp() {
       
        return view("blog.tools.todo");
    }
    //Habit Tracker
    public function HabitTracker() {
        
        return view("blog.tools.habit-tracker");
    }
    //Resume Builder
    public function ResumeBuilder() {
        
        return view("blog.tools.resume-builder");
    }
}
