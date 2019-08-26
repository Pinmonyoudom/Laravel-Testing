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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/students','ApiController@create'); 
Route::get('/students','ApiController@read');       
Route::get('/students/{id}','ApiController@show');     
Route::put('/students/{id}','ApiController@update');  
Route::delete('/students/{id}','ApiController@delete'); 

Route::get('/images','ImageController@downloadimage'); 
Route::post('/images','ImageController@uploadimage'); 


