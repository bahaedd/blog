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
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::get('blog/post/{slug}', [PostController::class, 'show']);
    Route::get('blog/category/{slug}', [CategoryController::class, 'index'])->name('category');
    Route::get('blog/tag/{slug}', [TagController::class, 'index']);
    //portfolio
    Route::get('/about',[SitemapController::class, 'about'])->name('about');
    Route::get('/portfolio', [ContactUsFormController::class, 'Portfolio'])->name('portfolio');
    Route::post('/portfolio/store', [ContactUsFormController::class, 'Contact'])->name('contact.store');
    Route::get('sitemap.xml',[SitemapController::class, 'index']);
    //projects
    //         ######################### MailerPack ################################
    Route::get('/projects/mailerpack',[ToolsController::class, 'index'])->name('mailerpack');
    
    //IP extractor
    Route::get('/projects/mailerpack/ipextractor',[ToolsController::class, 'extractor'])->name('ip-extractor');
    Route::post('/projects/ipextractor/extract',[ToolsController::class, 'extract']);
    //Domain extractor
    Route::get('/projects/mailerpack/domainextractor',[ToolsController::class, 'domainExtractor'])->name('domain-extractor');
    Route::post('/projects/domainextractor/extract',[ToolsController::class, 'extractDomain']);
    //DNS Lookup
    Route::get('/projects/mailerpack/dnslookup',[ToolsController::class, 'dnsLookup'])->name('dns-lookup');
    Route::post('/projects/dnslookup/lookup',[ToolsController::class, 'lookup']);
    //URL Lookup
    Route::get('/projects/mailerpack/urllookup',[ToolsController::class, 'UrlLookup'])->name('url-lookup');
    Route::post('/projects/urllookup/lookup',[ToolsController::class, 'Ulookup']);
    //IP Lookup
    Route::get('/projects/mailerpack/iplookup',[ToolsController::class, 'IpLookup'])->name('ip-lookup');
    Route::post('/projects/iplookup/lookup',[ToolsController::class, 'Ilookup']);
    //Random Generator
    Route::get('/projects/mailerpack/randomgenerator',[ToolsController::class, 'RandomGenerator'])->name('random-generator');
    Route::post('/projects/randomgenerator/generate',[ToolsController::class, 'GenerateRandom']);
    //User Generator
    Route::get('/projects/mailerpack/usergenerator',[ToolsController::class, 'UserGenerator'])->name('user-generator');
    Route::post('/projects/randomusergenerator/generate',[ToolsController::class, 'GenerateRandomUser']);
    //Password Generator
    Route::get('/projects/mailerpack/passwordgenerator',[ToolsController::class, 'PasswordGenerator'])->name('pass-generator');
    Route::post('/projects/passwordgenerator/generate',[ToolsController::class, 'GeneratePassword']);
    //Encode-Decode
    Route::get('/projects/mailerpack/encodedecode',[ToolsController::class, 'EncodeDecode'])->name('encode-decode');
    Route::post('/projects/encodedecode/encode',[ToolsController::class, 'Encode']);
    //Domain reputation
    Route::get('/projects/mailerpack/domainreputation',[ToolsController::class, 'DomainReputation'])->name('domain-reputation');
    Route::post('/projects/domainreputation/check',[ToolsController::class, 'CheckDomain']);

    //         ######################### PersonalPackApp ################################

    Route::get('/projects/personalpack',[ToolsController::class, 'PeronalPack'])->name('personalpack');

    //Todo App
    Route::get('/projects/personalpack/todo',[ToolsController::class, 'TodoApp'])->name('todo');
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

    //Resume builder
    Route::get('/projects/personalpack/resume-builder',[ToolsController::class, 'ResumeBuilder'])->name('resume-builder');

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
  
  });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
