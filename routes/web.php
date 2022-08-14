<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\tagController;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('post/{slug}', [PostController::class, 'show']);
Route::get('category/{id}', [CategoryController::class, 'index']);
// Route::get('tag/{id}', [TagController::class, 'index']);

Route::get('/portfolio', function () {
    return view('protfolio');
})->name('portfolio');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
