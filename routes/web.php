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
    return view('Dashboard.admin.admin_login');
});
Route::get('/admin/register', [App\Http\Controllers\DashboardController::class, 'register_view'])->name('register_view');
Route::get('/admin/login', [App\Http\Controllers\DashboardController::class, 'login_view'])->name('login_view');

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
Route::get('grocery/store/edit/{id}',[App\Http\Controllers\DashboardController::class, 'grocery_edit'])->name('grocery_edit');
Route::post('grocery/store/update',[App\Http\Controllers\DashboardController::class, 'grocery_update'])->name('grocery_update');
Route::get('grocery/store/delete/{id}',[App\Http\Controllers\DashboardController::class, 'grocery_delete'])->name('grocery_delete');

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

//begin payments
Route::get('/user/payments',[App\http\controllers\DashboardController::class, 'payments'])->name('payments');
Route::post('/add/user/payments',[App\http\controllers\DashboardController::class, 'add_payments'])->name('add_payments');
Route::get('/payment/view',[App\http\controllers\DashboardController::class, 'view_payments'])->name('view_payments');
Route::post('payments/update',[App\Http\Controllers\DashboardController::class, 'payment_update'])->name('payment_update');
Route::get('payments/edit/{id}',[App\Http\Controllers\DashboardController::class, 'payment_edit'])->name('payment_edit');
Route::get('payments/delete/{id}',[App\Http\Controllers\DashboardController::class, 'payment_delete'])->name('payment_delete');

//end payments


//begin Frontend
Route::get('/user/index',[App\http\controllers\FrontendController::class, 'user_index'])->name('user_index');
Route::get('/user/home',[App\http\controllers\FrontendController::class, 'user_home'])->name('user_home');
Route::get('/grocery/store',[App\http\controllers\FrontendController::class, 'grocery_store'])->name('grocery_store');
Route::get('/company/profile',[App\http\controllers\FrontendController::class, 'company_profile'])->name('company_profile');
Route::get('/customer/profile',[App\http\controllers\FrontendController::class, 'customer_profile'])->name('customer_profile');
Route::get('/grocery/summary',[App\http\controllers\FrontendController::class, 'grocery_summary'])->name('grocery_summary');
Route::get('/discount/table',[App\http\controllers\FrontendController::class, 'discount_table'])->name('discount_table');

//end frontend


//begin become merchant
Route::post('/add/merchant',[App\http\controllers\DashboardController::class, 'become_merchant'])->name('become_merchant');
Route::get('/become_merchant/view',[App\http\controllers\DashboardController::class, 'view_become_merchant'])->name('view_become_merchant');
Route::get('become_merchant/delete/{id}',[App\Http\Controllers\DashboardController::class, 'become_merchant_delete'])->name('become_merchant_delete');


//end become merchant
