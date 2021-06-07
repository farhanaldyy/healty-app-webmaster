<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


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

// route login
Route::post('login', 'Api\UserController@login');
// route register
Route::post('register', 'Api\UserController@register');
Route::get('poli', 'Api\PoliController@index');