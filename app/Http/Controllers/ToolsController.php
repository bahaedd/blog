<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Tool;
use App\Models\Education;
use App\Models\Work;
use App\Models\Personalinfo;
use App\Models\Summary;
use App\Models\Skill;
use App\Models\Language;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Crypt;
use Ipdata\ApiClient\Ipdata;
use Symfony\Component\HttpClient\Psr18Client;
use Nyholm\Psr7\Factory\Psr17Factory;
use Illuminate\Support\Facades\Hash;
use Auth;
use PDF;
use Redirect;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Carbon\Carbon;

class ToolsController extends Controller
{

    //         ######################### MailerPack ################################ 

    //MailerPack
    public function index() {

        seo()
        ->title('AlienDev | Tools-MailerPack')
        ->rawTag('<meta name="keywords" content="AlienDev, mailer pack tools, email marketing, IP extractor, domain checker, DNS lookup, email campaigns, subscriber inbox." />')
        ->description('Explore our Mailer Pack Tools - a suite of essential email marketing tools, including an IP extractor, domain checker, and DNS lookup. With these tools at your fingertips, you can easily gather crucial data to improve your email campaigns and ensure they land in your subscribers\' inboxes.')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Tools-MailerPack')
        ->twitterDescription('Explore our Mailer Pack Tools - a suite of essential email marketing tools, including an IP extractor, domain checker, and DNS lookup. With these tools at your fingertips, you can easily gather crucial data to improve your email campaigns and ensure they land in your subscribers\' inboxes.')
        ->twitterImage(URL('/images/alien.png'));

        $tools = Tool::where('pack', 'MailerPack')->get();
        return view("blog.tools.mailerpack", compact("tools"));
    }

    //ip extractor
    public function extractor() {
        seo()
        ->title('AlienDev | Tools-IPextractor')
        ->rawTag('<meta name="keywords" content="AlienDev, mailer pack tools, email marketing, IP extractor, domain checker, DNS lookup, email campaigns, subscriber inbox." />')
        ->description('Explore our Mailer Pack Tools - a suite of essential email marketing tools, including an IP extractor, domain checker, and DNS lookup. With these tools at your fingertips, you can easily gather crucial data to improve your email campaigns and ensure they land in your subscribers\' inboxes.')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Tools-MailerPack')
        ->twitterDescription('Explore our Mailer Pack Tools - a suite of essential email marketing tools, including an IP extractor, domain checker, and DNS lookup. With these tools at your fingertips, you can easily gather crucial data to improve your email campaigns and ensure they land in your subscribers\' inboxes.')
        ->twitterImage(URL('/images/alien.png'));

        $tools = Tool::where('pack', 'MailerPack')->get();
        return view("blog.tools.mailerpack", compact("tools"));

        $ipmatch = [];
        return view("blog.tools.ipextractor", compact("ipmatch"));
    }
    public function extractorshow() {
        $ipmatch = [];
        return view("blog.tools.ipextractor-show", compact("ipmatch"));
    }

    public function extractIP(Request $request) {

        $this->validate($request, [
            'text' => 'required',
         ]);
        $ipmatch = [];
        $text = $request->get('text');
        $reccord= $text;
        $regexIpAddress = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(?:\/\d{2})?/';
         preg_match_all($regexIpAddress, $reccord, $ip_match);
         
         $ipmatch = Arr::collapse($ip_match);
         $ipmatch = array_unique($ipmatch);
         if(empty($ipmatch)){
            $ipmatch = ['0' => 'No IP Address Found!'];
         }
               
         return view("blog.tools.ipextractor", compact("ipmatch"));
    }

    //Domain extractor
    public function domainExtractor() {

        $Dmatch = [];
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
        return view("blog.tools.domainextractor", compact("Dmatch"));
    }
    public function extractDomain(Request $request) {
        // Form validation
        $this->validate($request, [
            'text' => 'required',
         ]);
        
        $text = $request->get('text');
        $reccord= $text;
        $regexIpAddress = '/($[a-z0-9][a-z0-9\-]{0,61}[a-z0-9]\.)+[a-z0-9][a-z0-9\-]*[a-z0-9]$/';

        
        preg_match_all("/([a-z0-9][a-z0-9\-]{0,61}[a-z0-9]\.)+[a-z0-9][a-z0-9\-]*[a-z0-9]/", $reccord, $ip_match);
        $Dmatch = Arr::collapse($ip_match);
        $Dmatch = preg_grep('/([a-z0-9][a-z0-9\-]{0,61}[a-z0-9]\.)/', $Dmatch);
        $Dmatch = array_unique($Dmatch);
        if(empty($Dmatch)){
            $Dmatch = ['0' => 'No Domain name Found!'];
         }

        return view("blog.tools.domainextractor", compact("Dmatch"));
    }

    //DNS lookup
    public function dnsLookup() {
        $data = [];
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
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
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
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
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
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

        $randomStrings = array();
        seo()
        ->title('AlienDev | Random Generator')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
        return view("blog.tools.randomgenerator", compact("randomStrings"));
    }

    public function GenerateRandom(Request $request)
{
    $this->validate($request, [
        'length' => 'required|max:70',
        'string' => 'required',
        'num' => 'required|max:10'
    ]);

    $charactersAll = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersUpper = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersUpperOnly = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLower = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLowerOnly = 'abcdefghijklmnopqrstuvwxyz';
    $charactersNumOnly = '0123456789';
    $charactersChar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $region = $request->get('region');
    
    $randomStrings = array();

    for ($j = 0; $j < $request->get('num'); $j++) {
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

        array_push($randomStrings, $randomString);
    }


    return view("blog.tools.randomgenerator", compact("randomStrings", "region"));
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
        seo()
        ->title('AlienDev | User Generator')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

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
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

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
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
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
        $rate = '';
        $color = '';
        $data = [
          "data" => [
              "attributes"=> [
              "last_analysis_stats"=> [
                  "harmless"=>"",
                  ],
              ],
              ],
           
        ];

        return view("blog.tools.domainreputation", compact("hidden", "data" , "rate" , "color"));
    }

    public function CheckDomain(Request $request) {

        $hidden = '';
        $rate = '';
        $color = '';
        $this->validate($request, [
            'domain' => 'required',
         ]);
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

        $response = Http::withHeaders([
            'X-Apikey' => 'a35244de6de6ad4cb065e617ddd2055493af9dbaa3c6dc0989e5fb1687399498',
             ])->get('https://www.virustotal.com/api/v3/domains/'.$request->get('domain'));
        
       $data = json_decode($response, true);
       
       if (isset($data['data'])) {
        if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 0 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 20) {
           $rate = 'Malicious';
           $color= 'bg-yellow-300';
       }
       else if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 20 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 40) {
           $rate = 'High Risk';
           $color = 'bg-red-500';
       }
       else if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 40 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 50) {
           $rate = 'Suspicious';
           $color = 'bg-red-700';
       }
       else if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 50 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 70) {
           $rate = 'Suspicious';
           $color = 'bg-red-700';
       }
       else if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 70 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 100) {
           $rate = 'Trustworthy';
           $color = 'bg-green-700';
       }
       }
       else {
        $rate = 'Sorry!! domain not found';
       }

        return view("blog.tools.domainreputation", compact("hidden", "data", "rate", "color"));
    }

    //Domain Health
    public function DomainHealth() {

        $hidden = 'hidden';
        $rate = '';
        $color = '';
        $data = [
          "data" => [
              "attributes"=> [
              "last_analysis_stats"=> [
                  "harmless"=>"",
                  ],
              ],
              ],
           
        ];

        return view("blog.tools.domainreputation", compact("hidden", "data" , "rate" , "color"));
    }

    public function CheckDomainHealth(Request $request) {

        $hidden = '';
        $rate = '';
        $color = '';
        $this->validate($request, [
            'domain' => 'required',
         ]);
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

        $response = Http::withHeaders([
            'X-Apikey' => 'a35244de6de6ad4cb065e617ddd2055493af9dbaa3c6dc0989e5fb1687399498',
             ])->get('https://www.virustotal.com/api/v3/domains/'.$request->get('domain'));
        
       $data = json_decode($response, true);
        
    // dd($data['data']['attributes']['last_analysis_stats']['harmless']);

       // dd($data);

       if (isset($data['data'])) {
        if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 0 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 20) {
           $rate = 'Malicious';
           $color= 'bg-yellow-300';
       }
       else if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 20 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 40) {
           $rate = 'High Risk';
           $color = 'bg-red-500';
       }
       else if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 40 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 50) {
           $rate = 'Suspicious';
           $color = 'bg-red-700';
       }
       else if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 50 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 70) {
           $rate = 'Suspicious';
           $color = 'bg-red-700';
       }
       else if ($data['data']['attributes']['last_analysis_stats']['harmless'] > 70 && $data['data']['attributes']['last_analysis_stats']['harmless'] < 100) {
           $rate = 'Trustworthy';
           $color = 'bg-green-700';
       }
       }
       else {
        $rate = 'Sorry!! domain not found';
       }

       
        
        

        return view("blog.tools.domainreputation", compact("hidden", "data", "rate", "color"));
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
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
    }
    //Habit Tracker
    public function HabitTracker() {
        
        return view("blog.tools.habit-tracker");
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
    }
    //Resume Builder
    public function ResumeBuilder() {

        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.resume-builder");
         

    }

    public function ResumeDownload(Request $request, $model_id, $user_id) {

        $personal_informations = Auth::user()->personalinfo;
        $educations = Education::where('user_id', '=', Auth::user()->id)->get();
        $works = Work::where('user_id', '=', Auth::user()->id)->get();
        $skills = Skill::where('user_id', '=', Auth::user()->id)->get();
        $summary = Auth::user()->summary;
        $languages = Language::where('user_id', '=', Auth::user()->id)->get();
        $projects = Project::where('user_id', '=', Auth::user()->id)->get();
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

        if($model_id == 1){
            return view("blog.tools.resume-download", compact("personal_informations", "educations", "works", "skills", "summary", "languages", "projects"));
        }
        else {
            return view("blog.tools.resume-download2", compact("personal_informations", "educations", "works", "skills", "summary", "languages", "projects"));
        }

    }

    public function pdfview(Request $request)
    {
        $personal_informations = Auth::user()->personalinfo;
        $educations = Education::where('user_id', '=', Auth::user()->id)->get();
        $works = Work::where('user_id', '=', Auth::user()->id)->get();
        $skills = Skill::where('user_id', '=', Auth::user()->id)->get();
        $summary = Auth::user()->summary;
        $languages = Language::where('user_id', '=', Auth::user()->id)->get();
        $projects = Project::where('user_id', '=', Auth::user()->id)->get();

        view()->share('personal_informations',$personal_informations);
        view()->share('educations',$educations);
        view()->share('works',$works);
        view()->share('skills',$skills);
        view()->share('summary',$summary);
        view()->share('languages',$languages);
        view()->share('projects',$projects);


        if($request->has('download')){
            $pdf = PDF::loadView('blog.tools.resume-download');
            return $pdf->download('resume-download.pdf');
        }


        return view('pdfview');
    }

    //MultiNotes
    public function Multinotes() {
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.multinotes");

    }

    //BucketGenerator
    public function BucketGenerator() {
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.bucket-generator");

    }

    //AdhanSelect
    public function AdhanSelect() {

        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.adhan-form");

    }

    //AdhanTime
    public function Adhan(Request $request) {

        $now = Carbon::now()->format('j-n-Y');
        $now_content = explode('-', $now);
        $today = $now_content[0];
        $month = $now_content[1];
        $year = $now_content[2];
        $city = $request->get('city');


        $response = Http::get('http://api.aladhan.com/v1/calendarByCity/'.$year.'/'.$month.'?city='.$city.'&country=Morocco&method=4');
        
        $data = json_decode($response->body(), true);

        // dd($data);
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.adhan", compact('data', 'today', 'city'));

    }

    //Asmma Alhosna
    public function AsmaaAlhosna() {

        $response = Http::get('http://api.aladhan.com/asmaAlHusna');
        
        $data = json_decode($response->body(), true);

        // dd($data);

        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.asmaa", compact('data'));

    }

    //Hisn Almoslim
    public function HisnAlmoslim() {

        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.hisn-almoslim");

    }

    //Adhkar Sabah
    public function AdhkarSabah() {

        $response = Http::get('https://ahegazy.github.io/muslimKit/json/azkar_sabah.json');
        
        $data = json_decode($response->body(), true);

        //dd($data);

        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.adhkar-sabah", compact('data'));

    }

    //Adhkar Almasae
    public function AdhkarAlmasae() {

        $response = Http::get('https://ahegazy.github.io/muslimKit/json/azkar_massa.json');
        
        $data = json_decode($response->body(), true);

        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.adhkar-almasae", compact('data'));

    }

    //Adhkar Salat
    public function AdhkarSalat() {

        $response = Http::get('https://ahegazy.github.io/muslimKit/json/PostPrayer_azkar.json');
        
        $data = json_decode($response->body(), true);
        seo()
        ->title('AlienDev | Adhkar Salat')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.adhkar-salat", compact('data'));

    }

     //Email Extractor
    public function EmailExtractor() {

        $emails = [];
        seo()
        ->title('AlienDev | Email Extractor')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

        return view("blog.tools.email-extractor", compact('emails'));

    }

    public function EmailExtract(Request $request) {

        $this->validate($request, [
            'text' => 'required',
         ]);
        $emails = [];
        $text = $request->get('text');
        $reccord= $text;
        $regexEmailAddress = '/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i';
        preg_match_all($regexEmailAddress, $reccord, $email_match);
         
        $emails = Arr::collapse($email_match);
        $emails = array_unique($emails);
        if(empty($emails)){
            $emails = ['0' => 'No Email Address Found!'];
         }

         seo()
        ->title('AlienDev | Email extractorshow')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.email-extractor", compact('emails'));

    }

    //exchange-rate
    public function exchangeRate() {

        $hidden = 'hidden';
        $result = [
          "query" => [
              "from" => '',
              "to" => '',
              "amount" => ''
              ],
          "result" => ''
           
        ];
        $response = Http::get('https://openexchangerates.org/api/currencies.json');     
        $data = json_decode($response->body(), true);

        return view("blog.tools.exchange-rate", compact('data', 'hidden', 'result'));

    }

    public function CheckExchange(Request $request) {

        $this->validate($request, [
            'from' => 'required',
            'to' => 'required'
         ]);

        $hidden = '';
        $response = Http::get('https://openexchangerates.org/api/currencies.json');     
        $data = json_decode($response->body(), true);
        $rate = Http::get('https://api.exchangerate.host/convert?from='.$request->get('from').'&to='.$request->get('to'));     
        $result = json_decode($rate->body(), true);

         return view("blog.tools.exchange-rate", compact('hidden', 'data', 'result'));

    }

    //Shuffle Lines
    public function ShuffleLines() {

         $lines  = [];
         seo()
        ->title('AlienDev | ShuffleLines')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
         return view("blog.tools.shufflelines", compact('lines'));

    }

    public function Shuffle(Request $request) {


        $this->validate($request, [
            'text' => 'required',
         ]);

        $lines = [];
        $text = $request->get('text');
        $array = explode("\n", $text );       
        $lines = array_filter(explode("\n", $text));
        shuffle($lines);
        seo()
        ->title('AlienDev | Shuffle lines')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.shufflelines", compact('lines'));

    }

    //Email Validator
    public function emailValidator() {

        $hidden = 'hidden';

        seo()
        ->title('AlienDev | Email Extractor')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

        return view("blog.tools.email-validator", compact('hidden'));

    }

    public function CheckEmail(Request $request) {

        $hidden = '';

        $this->validate($request, [
            'email' => 'required'
         ]);

        $response = Http::get('https://api.zerobounce.net/v2/validate?api_key=8ba76e7fb0ce456895fe8b9213dad9ca&email='.$request->get('email').'&ip_address=156.124.12.145');     
        $data = json_decode($response->body(), true);
        dd($data);

         seo()
        ->title('AlienDev | Email extractorshow')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));

         return view("blog.tools.email-validator", compact('hidden'));

    }

}

