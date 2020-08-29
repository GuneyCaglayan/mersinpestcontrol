<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@show')->name('home');

Route::get('/home/image', 'ImageController@create');
Route::post('/home/image', 'ImageController@store');
Route::get('/', 'ImageController@show');

Route::get('/home/video', 'VideoController@create');
Route::post('/home/video', 'VideoController@store');

Route::delete('/home/image/{image}', 'HomeController@destroy');
Route::delete('/home/video/{video}', 'HomeController@destroyVideo');
