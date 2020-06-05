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

// ===[Route Tampilan all Page]=== //

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('master');
});

Route::get('/Dashboard', function () {
    return view('dashboard');
});

Route::get('/Home/Data-Statistic', 'HomeController@data_status');


Route::get('/Home/Form', 'HomeController@form');

Route::get('/Data', 'CovidController@chart');


// ===[Route CRUD]=== //

Route::post('/Home/Store', 'HomeController@store');
