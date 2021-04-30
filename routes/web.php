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

Route::get('/', function () {  //get fun retrive the home page of the app and return a view named welcome.blade.php!
    return view('welcome');
});

//Route::get('about',function(){ //when the user go the /about page the app opens the about.blade.php view
//   return view('about') ;
//});

Route::get('todos','App\Http\Controllers\ToDosController@index'); //when the user visites the about page laravel whould load the AboutControler and it will exceute the index function in this page
