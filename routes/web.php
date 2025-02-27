<?php

use App\Brand;
use App\Category;
use App\Product;
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
Route::get('/change-status/{id}','OrderController@change_status');



Route::get('/information','CheckoutController@show_information');
Route::get('/edit-information','CheckoutController@show_edit');
Route::post('/edit-information','CheckoutController@edit_information');

Route::post('/chi-tiet-san-pham/{id}', 'ProductController@review');
Route::get('/chi-tiet-san-pham/{id}', 'ProductController@show_detail_product');
Route::get('/danh-muc-san-pham/{id}', 'ProductController@show_product_category');
Route::get('/thuong-hieu-san-pham/{id}', 'ProductController@show_product_brand');



Route::get('/', 'HomeController@index');
Route::post('/a','SubscribersController@add_email');
Route::resource('/contact-us','ContactUsController')->only(['index','store']);


Route::get('/login', 'AdminController@Index')->name('admin_login');
Route::get('/admin-signup', 'AdminController@SignUp');
Route::post('/do-signup', 'AdminController@DoSignUp');
Route::post('/do-login', 'AdminController@DoLogin');
Route::get('/dashboard', 'AdminController@ShowDashbord')->middleware('checkadm');
Route::get('/logout-adm', 'AdminController@DoLogout');



Route::resource('account', 'AccountController')->middleware('checkadm');
Route::get('/unactive-account/{account_id}', 'AccountController@Unactive_account')->middleware('checkadm');
Route::get('/active-account/{account_id}', 'AccountController@Active_account')->middleware('checkadm');
Route::get('/edit-account/{account_id}', 'AccountController@Edit_account')->middleware('checkadm');
Route::post('/update-account/{account_id}', 'AccountController@Update_account')->middleware('checkadm');
Route::get('/find-by-email', 'AccountController@FindByEmail')->middleware('checkadm');


//brand
Route::resource('brand', 'BrandController')->middleware('checkadm');

Route::resource('categories','CategoryController')->middleware('checkadm');
Route::get('/unactive-categories/{categories_id}', 'CategoryController@Unactive_categories')->middleware('checkadm');
Route::get('/active-categories/{categories_id}', 'CategoryController@Active_categories')->middleware('checkadm');
Route::get('/edit-categories/{categories_id}', 'CategoryController@Edit_categories')->middleware('checkadm');
Route::post('/update-categories/{categories_id}', 'CategoryController@Update_categories')->middleware('checkadm');
Route::get('/find-by-name', 'CategoryController@FindByName')->middleware('checkadm');

//product
Route::resource('/product', 'ProductController')->middleware('checkadm');
Route::get('/unactive-product/{id}', 'ProductController@Unactive_product')->middleware('checkadm');
Route::get('/active-product/{id}', 'ProductController@Active_product')->middleware('checkadm');



//checkout
Route::get('/login-checkout', 'CheckoutController@login_checkout'); // view đăng nhập đăng kí người dùng
Route::get('/logout-checkout', 'CheckoutController@logout_checkout'); // logout người dùng
Route::post('/login-customer', 'CheckoutController@login_customer');// login user
Route::post('/change-shipping', 'CheckoutController@change_shipping');
Route::get('/checkout', 'CheckoutController@checkout'); // hiện thị form nhập thông tin gưi hàng và chọn đạt mua
Route::post('/add-customer', 'CheckoutController@add_customer'); // xử lý tạo mới tài khoản người dùng
Route::post('/save-checkout-customer', 'CheckoutController@save_checkout_customer'); // xử lý lưu thông tin gửi hàng của người dùng
Route::get('/payment', 'CheckoutController@payment'); // view chọn hình thức thanh toán

// quản lý đơn hàng cua user
Route::get('/order-management', 'CheckoutController@order_management');

//blog
Route::get('/blog-list-page1','BlogController@showpage1');
Route::get('/blog-list-page2','BlogController@showpage2');
Route::get('/blog-list-page3','BlogController@showpage3');
Route::get('/blog-single-1','BlogController@showsingleblog1');
Route::get('/blog-single-2','BlogController@showsingleblog2');
Route::get('/blog-single-3','BlogController@showsingleblog3');

// Sản phẩm
Route::get('/san-pham', 'HomeController@sanpham');
//q&a
Route::get('q&a',function ()
{
    $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
    $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
    $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
    $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
    $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
    return view('pages.q&a.q&a')->with('category1', $category_product1)->with('category2', $category_product2)
        ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product);;
});


//giỏ hàng
Route::get('/shopping-cart/add', 'ShoppingCartController@add'); // thêm sản phẩm
Route::get('/shopping-cart/remove', 'ShoppingCartController@remove'); // xóa sản phẩm
Route::get('/shopping-cart/show', 'ShoppingCartController@show'); // view giỏ hàng

//about-us
Route::get('about-us',function ()
{
    $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
    $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
    $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
    $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
    $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
    return view('pages.about-us.aboutus')->with('category1', $category_product1)->with('category2', $category_product2)
        ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product);;
});

// quan ly ddown hang admin
Route::resource('order-admin','OrderController')->middleware('checkadm');
