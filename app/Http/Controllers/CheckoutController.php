<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Checkout;
use App\Http\Requests\CheckoutValidate;
use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.checkout.show_checkout')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
    public function store(CheckoutValidate $request)
    {
        $request -> validated();
        $obj = new Checkout();
        $obj->checkout_email = $request->get('checkout_email');
        $obj->checkout_name = $request->get('checkout_name');
        $obj->customer_id = 1;
        $obj->checkout_address = $request->get('checkout_address');
        $obj->checkout_phone = $request->get('checkout_phone');
        $obj->checkout_notes = $request->get('checkout_notes');
        $obj->checkout_status = 1;
        $obj->save();
//        session::put('message', 'Thêm thanhf coong');
        return redirect('/checkout/');
    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }
}
