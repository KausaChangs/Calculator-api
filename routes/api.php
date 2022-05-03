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


Route::post("/sum","App\Http\Controllers\ApiController@sum");

Route::post("/subtract","App\Http\Controllers\ApiController@subtract");

Route::post("/multiply","App\Http\Controllers\ApiController@multiply");

Route::post("/divide","App\Http\Controllers\ApiController@divide");

Route::get("/back","App\Http\Controllers\ApiController@back");


