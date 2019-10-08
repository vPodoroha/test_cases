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

Route::get('statistics', 'ShortenerController@index');//get info about click
Route::post('cut', 'ShortenerController@cut');
Route::get('show', 'ShortenerController@show');
Route::get('{url}', 'ShortenerController@store');
