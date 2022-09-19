<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/weather', function() {
    $client = new \GuzzleHttp\Client();
    $apiKey = config('services.weather.key');
    $lat = request('lat');
    $lon = request('lon');
    $response = $client->request('GET', "https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&units=metric&appid=".$apiKey);

    return $response->getBody();
});
