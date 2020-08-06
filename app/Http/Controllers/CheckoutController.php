<?php

namespace App\Http\Controllers;

use App\Account;
use App\Brand;
use App\Category;
use App\Customer;
use App\Http\Requests\UserRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function login_checkout()
    {
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.checkout.login_checkout')->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product);
    }

    public function add_customer(Request $request)
    {
        $obj = new Account();
        $obj->name = $request->sign_up_name;
        $obj->phone = $request->sign_up_phone;
        $obj->email= $request->sign_up_email;
        $salt = $this->generateRandomString();
        $obj->salt = $salt;
        $password = ($request->sign_up_password) . $salt;
        $md5_password = md5($password);
        $obj->password = $md5_password;
        $obj->status = 1;
        $obj->role =0;
        if (Account::where('email','=',$obj->email)->first()===null){
            Session::put('customer_name', $request->sign_up_name);
            Session::put('message', 'Tạo tài khoản thành công');
            $obj->save();
            return Redirect('/login-checkout');
        }
        else{
            Session::put('message', 'Tài khoản đã tồn tại!');
            return Redirect('/login-checkout');
        }
    }
    public function checkout()
    {
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.checkout.show_checkout')->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product);
    }
    function generateRandomString()
    {
        $length = 5;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function payment()
    {
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.checkout.payment')->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product);
    }
    public function logout_checkout()
    {
        Session::flush();
        return Redirect('/login-checkout');
    }
    public function login_customer(Request $request)
    {
        $email = $request->login_email;
        $result = Account::where('email','=',$email)->first();
        if ($result) {
            $salt = $result->salt;
        } else {
            Session::put('message', 'Không tồn tại email này');
            return Redirect('/login-checkout');
        }
        $password = ($request->login_password) . $salt;
        $passwordHash = md5($password);
        $account= Account::where('email','=',$email)->where('password','=',$passwordHash)->first();
        if ($account) {
            Session::put('customer_id', $account->id);
            return Redirect('/');
        } else {
            Session::put('message', 'Sai email hoặc mật khẩu');
            return Redirect('/login-checkout');
        }
    }
}
