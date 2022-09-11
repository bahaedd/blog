<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\tagController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\SitemapController;

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
    Route::get('/portfolio', [ContactUsFormController::class, 'Portfolio'])->name('portfolio');
    Route::post('/portfolio/store', [ContactUsFormController::class, 'Contact'])->name('contact.store');
    Route::get('sitemap.xml',[SitemapController::class, 'index']);
    //projects
    Route::get('/projects/weatherApp', function () {
        return view('projects.weatherApp.weather');
    });

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
  
  });