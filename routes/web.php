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



Route::get('/chi-tiet-san-pham/{id}', 'ProductController@show_detail_product');
Route::get('/danh-muc-san-pham/{id}', 'ProductController@show_product_category');
Route::get('/thuong-hieu-san-pham/{id}', 'ProductController@show_product_brand');



Route::get('/', 'HomeController@index');
Route::resource('/contact-us','ContactUsController')->only(['index','store']);

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



//checkout
Route::get('/login-checkout', 'CheckoutController@login_checkout');
Route::get('/logout-checkout', 'CheckoutController@logout_checkout');
Route::post('/login-customer', 'CheckoutController@login_customer');
Route::post('/order-place', 'CheckoutController@order_place');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/add-customer', 'CheckoutController@add_customer');
Route::post('/save-checkout-customer', 'CheckoutController@save_checkout_customer');
Route::get('/payment', 'CheckoutController@payment');

//blog
Route::get('/blog-list-page1','BlogController@showpage1');
Route::get('/blog-list-page2','BlogController@showpage2');
Route::get('/blog-list-page3','BlogController@showpage3');
Route::get('/blog-single-1','BlogController@showsingleblog1');
Route::get('/blog-single-2','BlogController@showsingleblog2');
Route::get('/blog-single-3','BlogController@showsingleblog3');

// Sản phẩm
Route::get('/san-pham', 'HomeController@sanpham');


//giỏ hàng
Route::get('/shopping-cart/add', 'ShoppingCartController@add');
Route::get('/shopping-cart/remove', 'ShoppingCartController@remove');
Route::get('/shopping-cart/show', 'ShoppingCartController@show');


