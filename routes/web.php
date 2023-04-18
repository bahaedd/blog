<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\tagController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\ArticleGenerator;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'HtmlMinifier'], function(){ 
    //Blog
    Route::get('/blog', [PostController::class, 'index']);
    Route::get('/post-template', [PostController::class, 'postTemplate']);
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::get('blog/post/{slug}', [PostController::class, 'show']);
    Route::get('blog/category/{slug}', [CategoryController::class, 'index'])->name('category');
    Route::get('blog/tag/{slug}', [TagController::class, 'index']);
    //portfolio
    Route::get('/about',[SitemapController::class, 'about'])->name('about');
    Route::get('/portfolio', [ContactUsFormController::class, 'Portfolio'])->name('portfolio');
    Route::post('/portfolio/store', [ContactUsFormController::class, 'Contact'])->name('contact.store');
    Route::get('/contact',[ContactUsFormController::class, 'ContactPage'])->name('contact');
    Route::get('sitemap.xml',[SitemapController::class, 'index']);
    //projects
    //         ######################### MailerPack ################################
    Route::get('/projects/mailerpack',[ToolsController::class, 'index'])->name('mailerpack');
    
    //IP extractor
    Route::get('/projects/mailerpack/ipextractor',[ToolsController::class, 'extractor'])->name('ip-extractor');
    Route::any('/projects/mailerpack/ipextractor/extract', [ToolsController::class, 'extractIP']);
    //Domain extractor
    Route::get('/projects/mailerpack/domainextractor',[ToolsController::class, 'domainExtractor'])->name('domain-extractor');
    Route::any('/projects/domainextractor/extract',[ToolsController::class, 'extractDomain']);
    //DNS Lookup
    Route::get('/projects/mailerpack/dnslookup',[ToolsController::class, 'dnsLookup'])->name('dns-lookup');
    Route::any('/projects/dnslookup/lookup',[ToolsController::class, 'lookup']);
    //URL Lookup
    Route::get('/projects/mailerpack/urllookup',[ToolsController::class, 'UrlLookup'])->name('url-lookup');
    Route::any('/projects/urllookup/lookup',[ToolsController::class, 'Ulookup']);
    //IP Lookup
    Route::get('/projects/mailerpack/iplookup',[ToolsController::class, 'IpLookup'])->name('ip-lookup');
    Route::any('/projects/iplookup/lookup',[ToolsController::class, 'Ilookup']);
    //Random Generator
    Route::get('/projects/mailerpack/randomgenerator',[ToolsController::class, 'RandomGenerator'])->name('random-generator');
    Route::any('/projects/randomgenerator/generate',[ToolsController::class, 'GenerateRandom']);
    //User Generator
    Route::get('/projects/mailerpack/usergenerator',[ToolsController::class, 'UserGenerator'])->name('user-generator');
    Route::any('/projects/randomusergenerator/generate',[ToolsController::class, 'GenerateRandomUser']);
    //Password Generator
    Route::get('/projects/mailerpack/passwordgenerator',[ToolsController::class, 'PasswordGenerator'])->name('pass-generator');
    Route::any('/projects/passwordgenerator/generate',[ToolsController::class, 'GeneratePassword']);
    //Encode-Decode
    Route::get('/projects/mailerpack/encodedecode',[ToolsController::class, 'EncodeDecode'])->name('encode-decode');
    Route::any('/projects/encodedecode/encode',[ToolsController::class, 'Encode']);
    //Domain reputation
    Route::get('/projects/mailerpack/domainreputation',[ToolsController::class, 'DomainReputation'])->name('domain-reputation');
    Route::any('/projects/domainreputation/check',[ToolsController::class, 'CheckDomain']);

    //Domain Health Checker
    Route::get('/projects/mailerpack/domainhealth',[ToolsController::class, 'DomainHealth'])->name('domain-health');
    Route::any('/projects/domainhealth/check',[ToolsController::class, 'CheckDomainHealth']);

    //Convercy Rate
    Route::get('/projects/personalpack/exchange-rate',[ToolsController::class, 'exchangeRate'])->name('exchange-rate');
    Route::any('/projects/exchange-rate/check',[ToolsController::class, 'CheckExchange']);

    //Email Address Validator landing
    Route::get('/projects/mailerpack/email-address-validator',[ToolsController::class, 'EmailAddressValidation'])->name('email-address-validator');

    //Email Address Validator
    Route::get('/projects/mailerpack/email-validator',[ToolsController::class, 'emailValidator'])->name('email-validator');
    Route::any('/projects/email-validator/check',[ToolsController::class, 'CheckEmail']);

    //Multipe Email Address Validator
    Route::get('/projects/mailerpack/multipe-email-validator',[ToolsController::class, 'multipeEmailValidator'])->name('multipe-email-validator');
    Route::any('/projects/email-validator/check',[ToolsController::class, 'CheckEmails']);

    //         ######################### PersonalPackApp ################################

    Route::get('/projects/personalpack',[ToolsController::class, 'PeronalPack'])->name('personalpack');

    
    //WriterBot App
    Route::get('/write', function () {
    $title = '';
    $content = '';
    $categories = Category::all();
    return view('blog.tools.writebot', compact('title', 'content', 'categories'));
    });
    Route::post('/write/generate', [ArticleGenerator::class, 'index']);

    //Habit tracker
    Route::get('/projects/personalpack/habit-tracker',[ToolsController::class, 'HabitTracker'])->name('habit-tracker');
    Route::get('/projects/personalpack/bucket-generator',[ToolsController::class, 'BucketGenerator'])->name('bucket-generator');

    //Adhan
    Route::any('/projects/personalpack/adhan',[ToolsController::class, 'Adhan']);
    //AdhanSelect
    Route::get('/projects/personalpack/adhan-select',[ToolsController::class, 'AdhanSelect'])->name('adhan-select');

    //Email-Extractor
    Route::get('/projects/mailerpack/email-extractor',[ToolsController::class, 'EmailExtractor'])->name('email-extractor');
    Route::any('/projects/emailextractor/email-extract',[ToolsController::class, 'EmailExtract']);

    //Ip-location
    Route::get('/projects/mailerpack/ip-location',[ToolsController::class, 'ipLocation'])->name('ip-location');
    Route::any('/projects/iplocation/location',[ToolsController::class, 'GetLocation']);

    //Shuffle-lines
    Route::get('/projects/mailerpack/suffle-lines',[ToolsController::class, 'ShuffleLines'])->name('suffle-lines');
    Route::any('/projects/shufflelines/shuffle',[ToolsController::class, 'Shuffle']);

    //Asmaa lah alhosna
    Route::get('/projects/muslimpack/asma-al-husna',[ToolsController::class, 'AsmaaAlhosna'])->name('asma-al-husna');

    //Hisn Almoslim
    Route::get('/projects/muslimpack/hisn-almoslim',[ToolsController::class, 'HisnAlmoslim'])->name('hisn-almoslim');
    //Adhkar sabah
    Route::get('/projects/muslimpack/adhkar-sabah',[ToolsController::class, 'AdhkarSabah'])->name('adhkar-sabah');
    //Adhkar almasae
    Route::get('/projects/muslimpack/adhkar-almasae',[ToolsController::class, 'AdhkarAlmasae'])->name('adhkar-almasae');
    //Adhkar salat
    Route::get('/projects/muslimpack/adhkar-salat',[ToolsController::class, 'AdhkarSalat'])->name('adhkar-salat');

    

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
  
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        //Resume builder
        Route::get('/projects/personalpack/resume-builder',[ToolsController::class, 'ResumeBuilder'])->name('resume-builder');
        Route::get('/resume-builder/user/resume-download/Model{model_id}/{user_id}',[ToolsController::class, 'ResumeDownload'])->name('resume-download');
        Route::get('pdfview',array('as'=>'pdfview','uses'=>'App\Http\Controllers\ToolsController@pdfview'));
        Route::get('/projects/personalpack/multinotes',[ToolsController::class, 'Multinotes'])->name('multinotes');
        //Todo App
        Route::get('/projects/personalpack/todo',[ToolsController::class, 'TodoApp'])->name('todo');
    });

    // Auth::routes();

    //Google
    Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
    //LinkedIn
    Route::get('/login/linkedin', [App\Http\Controllers\Auth\LoginController::class, 'redirectToLinkedin'])->name('login.linkedin');
    Route::get('/login/linkedin/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleLinkedinCallback']);
    //Github
    Route::get('/login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
    Route::get('/login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

    Route::get('/home', [PostController::class, 'index']);
