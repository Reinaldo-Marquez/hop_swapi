<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarshipController;
use App\Http\Controllers\VehicleController;

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

// Attributes:
// starships -- The URL root for Starships resources
// vehicles -- The URL root for Vehicles resources

// Route::get('/swapi/{attribute}', function ($attribute) {
//     $response = Http::get('http://swapi.dev/api/' . $attribute);
//     return $response;
// });

Route::resource('starships',StarshipController::class);
Route::resource('vehicles',VehicleController::class);