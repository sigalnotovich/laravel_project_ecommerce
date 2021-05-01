<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return view('welcome'); //welcome.blade.php
});


Route::get('/about' ,function (){
    return view('about'); //about.blade.php
//    echo "this is about page";
})->middleware('check'); //use a middlware

Route::get('/home' ,function (){
    echo "this is home page";
});


//Route::get('/contact','/http/ContactController@index');//laravel7
Route::get('/contact',[ContactController::class ,'index']);//laravel8
