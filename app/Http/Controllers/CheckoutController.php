<?php

namespace App\Http\Controllers;

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
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.checkout.login_checkout')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);
    }

    public function add_customer(Request $request)
    {
        $obj = array();
        $obj['customer_name'] = $request->sign_up_name;
        $obj['customer_phone'] = $request->sign_up_phone;
        $obj['customer_email'] = $request->sign_up_email;
        $salt = $this->generateRandomString();
        $obj['customer_salt'] = $salt;
        $password = ($request->sign_up_password) . $salt;
        $md5_password = md5($password);
        $obj['customer_password'] = $md5_password;
        $obj['customer_status'] = 1;
        $customer_id = DB::table('customers')->insertGetId($obj);
        Session::put('customer_id', $customer_id);
        Session::put('customer_name', $request->sign_up_name);
        return Redirect('/checkout');
    }
    public function checkout()
    {
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.checkout.show_checkout')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);
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
    public function save_checkout_customer(Request $request)
    {
        $data = array();
        $customer_id = session::get('customer_id');
        $data['customer_id'] = $customer_id;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_notes'] = $request->shipping_notes;
        $shipping_id = DB::table('shippings')->insertGetId($data);
        Session::put('shipping_id', $shipping_id);
        return Redirect('/payment');
    }
    public function payment()
    {
        $customer_id = Session::get('customer_id');
        $shipping_id = Session::get('shipping_id');
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.checkout.payment')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);
    }
    public function logout_checkout()
    {
        Session::flush();
        return Redirect('/login-checkout');
    }
    public function login_customer(Request $request)
    {
        $email = $request->login_email;
        $result = Customer::where('customer_email','=',$email)->first();
        if ($result) {
            $salt = $result->customer_salt;
        } else {
            Session::put('message', 'Không tồn tại email này');
            return Redirect('/login-checkout');
        }
        $password = ($request->login_password) . $salt;
        $passwordHash = md5($password);
        $account= Customer::where('customer_email','=',$email)->where('customer_password','=',$passwordHash)->first();
        if ($account) {
            Session::put('customer_id', $account->id);
            return Redirect('/checkout');
        } else {
            Session::put('message', 'Sai email hoặc mật khẩu');
            return Redirect('/login-checkout');
        }
    }
}
