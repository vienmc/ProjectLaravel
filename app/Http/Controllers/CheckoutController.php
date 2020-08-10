<?php

namespace App\Http\Controllers;

use App\Account;
use App\Brand;
use App\Category;
use App\Http\Requests\AccountRequest;
use App\Http\Requests\CheckoutValidate;
use App\Order;
use App\OrderDetai;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class CheckoutController extends Controller
{

    public function show_edit(){
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
        if (Session::has('customer_id')){
            $account=Account::where('id','=',Session::get('customer_id'))->where('status','=','1')->first();
            return view('pages.checkout.edit-information')->with('category1', $category_product1)->with('category2', $category_product2)
                ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product)->with('account',$account);
        }

        return view('pages.checkout.login_checkout')->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product);
    }
    public function edit_information(Request $request){
        $validatedData = $request->validate([
            'phone' => 'numeric',
        ]);
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        if (Session::has('customer_id')){
        $account=Account::where('id','=',Session::get('customer_id'))->where('status','=','1')->first();
        $account->name = $request->name;
        $account->phone = $request->phone;
        $salt = $account->salt;
        $passwordHash = $account->password;
        $account->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        if (md5($request->old_password .$salt ) != $passwordHash){
            Session::put('message','Sai mật khẩu hiện tại!');
            return Redirect('/edit-information');
        }
        else{
            if ($request->new_password != $request->confirm_password){
                Session::put('message','Mật khẩu mới không trùng khớp!');
                return Redirect('/edit-information');
            }
            $account->password = md5($request->new_password.$salt);
            $account->save();
        }
            Session::put('message','Thay đổi thông tin thành công!');
        return view('pages.checkout.information')->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product)->with('account',$account);
    }
    return Redirect::to('/login-checkout')->with('category1', $category_product1)->with('category2', $category_product2)
        ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product);
    }


    public function show_information(){
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);

        if (Session::has('customer_id')){
            $account=Account::where('id','=',Session::get('customer_id'))->where('status','=','1')->first();
        return view('pages.checkout.information')->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product)->with('account',$account);
    }

        return Redirect::to('/login-checkout')->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product);
    }

    // hiện thị form nhập thông tin gưi hàng và chọn đạt mua
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

    // xử lý lưu thông tin gửi hàng của người dùng đã đăng nhập thành công
    public function save_checkout_customer(CheckoutValidate $request)
    {
        $shoppingCart = Session::get('shoppingCart');
        // nếu session ko có thông tin giỏ hàng
        if ($shoppingCart == null) {
            // thì tạo mới giỏ hàng là một mảng các key và value
            $shoppingCart = array(); // key và value
        }

        $request->validated();
        $obj = new Order();
        $obj->shipping_email = $request ->get('shipping_email');
        $obj->shipping_name = $request ->get('shipping_name');
        $obj->shipping_address = $request ->get('shipping_address');
        $obj->shipping_phone = $request ->get('shipping_phone');
        $obj->shipping_notes = $request ->get('shipping_notes');
        $obj->order_status = $request ->get('order_status');
        $obj->shipping_status = 1;
        $obj->account_id = session::get('customer_id');


        $orderDetails = array();
        foreach ($shoppingCart as $key => $cartItem){
            $id = $cartItem['id'];
            $name = $cartItem['product_name'];
            $product = Product::find($id);
            if($product == null){
                continue;
            }
            $quantity = $cartItem['quantity'];
            $orderDetail = new OrderDetai();
            $orderDetail->product_id = $id;
            $orderDetail->product_name = $name;
            // $orderDetail->order_id = ? chờ lưu đơn hàng mới có.
            $orderDetail->quantity = $quantity;
            $orderDetail->unit_price = $product->product_price;
            $obj -> total_money += $orderDetail->unit_price * $orderDetail->quantity;
            array_push($orderDetails, $orderDetail);
        }
        DB::transaction(function() use ($obj, $orderDetails) {
            $obj->save(); // có id của order.
            Session::put('order_id',$obj->id);
            foreach ($orderDetails as $orderDetail){
                $orderDetail->order_id = $obj->id;
                $orderDetail->save();
            }
        });
        return Redirect('/payment');
    }
    public function change_shipping(){
        $obj = Order::find(Session::get('order_id'));
        Session::remove('shoppingCart');
        return redirect('order-management');
    }
    // view đăng nhập đăng kí người dùng
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

    //xử lý đăng nhập user
    public function login_customer(Request $request)
    {
        $email = $request->login_email;
        $result = Account::where('email','=',$email)->where('status','=',1)->first();
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
            Session::put('customer_username',$account->name);
            return Redirect('/');
        } else {
            Session::put('message', 'Sai email hoặc mật khẩu');
            return Redirect('/login-checkout');
        }
    }

    // xử lý tạo mới tài khoản người dùng
    public function add_customer(AccountRequest $request)
    {
        $request->validated();
        $obj = new Account();
        $obj->name = $request->name;
        $obj->phone = $request->phone;
        $obj->email= $request->email;
        $salt = $this->generateRandomString();
        $obj->salt = $salt;
        $password = ($request->password) . $salt;
        $md5_password = md5($password);
        $obj->password = $md5_password;
        $obj->status = 1;
        $obj->role =0;
        $obj->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        if (Account::where('email','=',$obj->email)->first()===null){
            Session::put('customer_name', $request->sign_up_name);
            Session::put('message1', 'Tạo tài khoản thành công');
            $obj->save();
            return Redirect('/login-checkout');
        }
        else{
            Session::put('message1', 'Tài khoản đã tồn tại!');
            return Redirect('/login-checkout');
        }
    }

    // hiện thị view chọn hình thức thanh toán
    public function payment()
    {
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        if (Session::has('customer_id')) {
            $obj = Order::find(Session::get('order_id'));
            return view('pages.checkout.payment')->with('category1', $category_product1)->with('category2', $category_product2)
                ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('all_product', $all_product)->with('obj', $obj);
        }
        return Redirect::to('/login-checkout');
    }

// thoát đăng nhập người dùng
    public function logout_checkout()
    {
        if (Session::has('customer_id')){
            Session::remove('customer_id');
        }
        if (Session::has('customer_username')){
            Session::remove('customer_username');
        }

        return Redirect('/login-checkout');
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

    public function order_management(){
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();
        if (Session::has('customer_id')) {
            $obj = Order::where('account_id', '=', Session::get('customer_id'))->orderby('updated_at', 'desc')->paginate(4);

            return view('pages.user.order_management')->with('category1', $category_product1)->with('category2', $category_product2)
                ->with('brand1', $brand_product1)->with('brand2', $brand_product2)->with('obj', $obj);
        }
        return Redirect::to('/login-checkout');
    }

}
