<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Http\Requests\ProductValidate;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Product::all();
        return view('Admin.Product.list')->with(compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $brand = Brand::all();
        return view('Admin.Product.add')->with(compact('category','brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductValidate $request)
    {
        $request ->validated();
        $obj = new Product();
        $obj->product_name = $request->get('product_name');
        $obj->category_id = $request->get('category_id');
        $obj->brand_id = $request->get('brand_id');
        $obj->product_desc = $request->get('product_desc');
        $obj->product_content = $request->get('product_content');
        $obj->product_price = $request->get('product_price');
        $obj->product_image = $request->get('product_image');
        $obj->product_status = $request->get('product_status');
        $obj->save();
        session::put('message', 'Thêm mới sản phẩm thành công');
        return response('/product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $brand = Brand::all();
        $obj = Product::find($id);
        return view('Admin.Product.edit')->with(compact('obj','category','brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductValidate $request, $id)
    {
        $request->validated();
        $obj = Product::find($id);
        $obj->product_name = $request->get('product_name');
        $obj->category_id = $request->get('category_id');
        $obj->brand_id = $request->get('brand_id');
        $obj->product_desc = $request->get('product_desc');
        $obj->product_content = $request->get('product_content');
        $obj->product_price = $request->get('product_price');
        $obj->product_image = $request->get('product_image');
        $obj->product_status = $request->get('product_status');
        $obj->save();
        session::put('message', 'Sửa sản phẩm thành công');
        return response('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
