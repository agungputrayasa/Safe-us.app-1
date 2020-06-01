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


// == Route Index == //
Route::get('/Home', function () {
    return view('master');
});

Route::get('/Home/Data-Statistic', 'HomeController@data_statistic');

// route baru
Route::get('form', 'FormController@form');
