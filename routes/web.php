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
    return view('welcome');
});
Route::get('home0189', function () {
    return view('home0189');
});
Route::get('artikel0189', function () {
    return view('artikel0189');
});
Route::get('contactUs0189', function () {
    return view('contactUs0189');
});
Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');
