<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route to view the currently user authenticated
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API route seacrh
Route::post('/searchFuelStation', 'GasolinePriceController@searchFuelStation');
Route::post('/searchState', 'GasolinePriceController@searchState');
Route::post('/locationCoords', 'GasolinePriceController@locationCoords');

// API routes to register an login users
Route::post('users', 'UserController@store');
Route::post('login', 'UserController@login');

// API protected with Passport
Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'],function () {
    Route::apiResource('gas-data', 'GasolinePriceController');
    Route::post('logout', 'UserController@logout');
});
// API without Oauth
Route::group(['prefix' => 'v2'],function () {
    Route::apiResource('gas-data', 'GasolinePriceController');
});
