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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//begin admindashboard
Route::get('/admin/index',[App\http\controllers\DashboardController::class, 'index'])->name('index');
Route::get('/add/user',[App\http\controllers\DashboardController::class, 'add_user_form'])->name('add_user_form');
Route::get('v1/add/user',[App\http\controllers\DashboardController::class, 'add_user_formv1'])->name('add_user_formv1');
Route::post('post/user',[App\http\controllers\DashboardController::class, 'post_user_information'])->name('post_user_information');
Route::get('user/edit/{id}',[App\Http\Controllers\DashboardController::class, 'user_edit'])->name('user_edit');
Route::post('user/update',[App\Http\Controllers\DashboardController::class, 'user_update'])->name('user_update');
Route::get('user/delete/{id}',[App\Http\Controllers\DashboardController::class, 'user_delete'])->name('user_delete');

//end admindashboard

//add category area
Route::post('/v1/dashboard/add/category/create',[App\Http\Controllers\CategoryController::class, 'cat_create'])->name('cat_create');
Route::get('view/category',[App\Http\Controllers\CategoryController::class, 'view_category'])->name('view_category');
Route::get('category/edit/{id}',[App\Http\Controllers\CategoryController::class, 'cat_edit'])->name('cat_edit');
Route::post('category/update',[App\Http\Controllers\CategoryController::class, 'cat_update'])->name('cat_update');
//end add category area

//add sub_category area
Route::post('/v1/dashboard/add/sub/category/create',[App\Http\Controllers\CategoryController::class, 'sub_cat_create'])->name('sub_cat_create');
Route::post('/get/subcategory',[App\Http\Controllers\DashboardController::class, 'get_subcategory']);
Route::get('view/subcategory',[App\Http\Controllers\CategoryController::class, 'view_subcategory'])->name('view_subcategory');
Route::get('subcategory/edit/{id}',[App\Http\Controllers\CategoryController::class, 'sub_edit'])->name('sub_edit');
Route::post('subcategory/update',[App\Http\Controllers\CategoryController::class, 'sub_update'])->name('sub_update');
//end sub_category area

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
Route::get('discount/store/edit/{id}',[App\Http\Controllers\DashboardController::class, 'dis_edit'])->name('dis_edit');
Route::post('discount/store/update',[App\Http\Controllers\DashboardController::class, 'dis_update'])->name('dis_update');
Route::get('discount/store/delete/{id}',[App\Http\Controllers\DashboardController::class, 'dis_delete'])->name('dis_delete');
//end Discount_store

//begin ExistUser
Route::get('/exist/user',[App\http\controllers\DashboardController::class, 'exist_user'])->name('exist_user');
Route::post('/add/user',[App\http\controllers\DashboardController::class, 'add_user'])->name('add_user');

//end ExistUser
