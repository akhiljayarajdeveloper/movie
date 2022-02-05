<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FavouriteController;

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


Route::prefix('v1')->group(function (){
Route::apiResource('movies', MovieController::class);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
Route::post('favourites', [FavouriteController::class, 'store']);
Route::get('favourites', [FavouriteController::class, 'index']);

});
});
