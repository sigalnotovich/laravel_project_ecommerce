<?php

use App\Http\Controllers\CategoryController;
use App\Models\Customers;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::get('/dashboard', function () {
//    $users = User::all(); //get all the sata from the user.php model
//    return view('dashboard',compact('users')); //pass all the data to the dashbord view
//    $Customers = Customers::all();
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/customers', function () {
    $Customers = Customers::all();
    return view('customers', compact('Customers'));
});

//Route::get('/customer', function () {
//    return view('customers');
//});

Route::get('/home', function () {
    return view('home');
});

//category Controller
//Route::get('/category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::get('/category/all',function (){
   return view('admin.category.index');
});

require __DIR__.'/auth.php';
