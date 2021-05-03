<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Models\Customers;
use Illuminate\Support\Facades\Auth;
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
Route::get('/category/all',[CategoryController::class,'AllCat'])->name('all.category');
//Route::get('/category/all',function (){
//   return view('admin.category.index');
//});

Route::post('/category/add',[CategoryController::class,"AddCat"])->name('store.category');

Route::get('category/edit{id}',[CategoryController::class,'Edit']);

Route::post('/category/update/{id}',[CategoryController::class, 'Update'])->name('category/update/{id}');

Route::get('category/delete/{id}',[CategoryController::class, 'Delete']);

Route::resource('products','ProductsController');

//todo: Auth::routes();

Route::get('/Products/all',[\App\Http\Controllers\ProductsController::class,'AllProd'])->name('all.Products');

Route::get('Products/edit{id}',[ProductsController::class,'Edit']);

Route::post('/Products/add',[ProductsController::class,"AddProd"])->name('store.Product');

Route::post('/Products/update/{id}',[ProductsController::class, 'Update']);

Route::get('Products/delete/{id}',[ProductsController::class, 'Delete']);

require __DIR__.'/auth.php';

