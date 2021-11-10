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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//begin userinformation
Route::get('/user/profile',[App\http\controllers\DashboardController::class, 'profile'])->name('profile');
Route::get('/user/view',[App\http\controllers\DashboardController::class, 'view_user'])->name('view_user');

//enduser

//begin customer
Route::get('/customer',[App\http\controllers\DashboardController::class, 'customer'])->name('customer');
Route::post('/add/customer',[App\http\controllers\DashboardController::class, 'add_customer'])->name('add_customer');
//end customer

//begin Grocery_store
Route::get('/grocery/store',[App\http\controllers\DashboardController::class, 'grocery_store'])->name('grocery_store');
Route::post('/add/grocery',[App\http\controllers\DashboardController::class, 'add_grocery'])->name('add_grocery');
Route::get('/grocery/view',[App\http\controllers\DashboardController::class, 'view_grocery'])->name('view_grocery');

//end Grocery_store

//begin Discount_store
Route::get('/discount/store',[App\http\controllers\DashboardController::class, 'discount_store'])->name('discount_store');
Route::post('/add/discount',[App\http\controllers\DashboardController::class, 'add_discount'])->name('add_discount');
Route::get('/discount/view',[App\http\controllers\DashboardController::class, 'view_discount_store'])->name('view_discount_store');

//end Discount_store

//begin ExistUser
Route::get('/exist/user',[App\http\controllers\DashboardController::class, 'exist_user'])->name('exist_user');
Route::post('/add/user',[App\http\controllers\DashboardController::class, 'add_user'])->name('add_user');

//end ExistUser
