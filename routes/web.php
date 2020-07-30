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

Route::get('/login', 'AdminController@Index');
Route::get('/admin-signup', 'AdminController@SignUp');
Route::post('/do-signup', 'AdminController@DoSignUp');
Route::post('/do-login', 'AdminController@DoLogin');
Route::get('/dashboard', 'AdminController@ShowDashbord');

Route::resource('account', 'AccountController');
Route::get('/unactive-account/{account_id}', 'AccountController@Unactive_account');
Route::get('/active-account/{account_id}', 'AccountController@Active_account');
Route::get('/edit-account/{account_id}', 'AccountController@Edit_account');
Route::post('/update-account/{account_id}', 'AccountController@Update_account');
Route::get('/find-by-email', 'AccountController@FindByEmail');
//brand
Route::resource('brand', 'BrandController');
Route::get('/unactive-brand/{brand_id}', 'BrandController@Unactive_brand');
Route::get('/active-brand/{brand_id}', 'BrandController@active_brand');

Route::resource('categories','CategoryController');
Route::get('/unactive-categories/{categories_id}', 'CategoryController@Unactive_categories');
Route::get('/active-categories/{categories_id}', 'CategoryController@Active_categories');
Route::get('/edit-categories/{categories_id}', 'CategoryController@Edit_categories');
Route::post('/update-categories/{categories_id}', 'CategoryController@Update_categories');
Route::get('/find-by-name', 'CategoryController@FindByName');

//product
Route::resource('/product', 'ProductController');
Route::get('/unactive-product/{id}', 'ProductController@Unactive_product');
Route::get('/active-product/{id}', 'ProductController@Active_product');
