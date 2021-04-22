<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/person/csrf', 'PersonController@token');
Route::get('/person', 'PersonController@index');
Route::post('/person', 'PersonController@store');
Route::get('/person/{id}', 'PersonController@show');
Route::put('/person/{id}', 'PersonController@update');
Route::delete('/person/{id}', 'PersonController@delete');
