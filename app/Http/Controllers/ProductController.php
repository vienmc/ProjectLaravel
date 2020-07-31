<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Http\Requests\ProductValidate;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // tạo biến data là một mảng chứa dữ liệu trả về.
        $data = array();
        $data['category_id'] = 0;
        $data['keyword'] = '';
        $categories = Category::all();
        $product_list = Product::query();
        if ($request->has('category_id') && $request->get('category_id') != 0) {
            $data['category_id'] = $request->get('category_id');
            $product_list = $product_list->where('category_id', '=', $request->get('category_id'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $product_list = $product_list->where('product_name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $product_list = $product_list->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $product_list->get();
        $data['categories'] = $categories;

        return view('Admin.Product.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status','=',1)->get();
        $brand = Brand::where('brand_status','=',1)->get();
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
        $obj->product_price = $request->get('product_price');
        $obj->product_status = $request->get('product_status');
        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }

        $obj->save();
        $request->session()->flash('message', 'Thêm mới sản phẩm thành công!');
        return redirect('/product');
//        echo "<pre>";
//        print_r($obj);
//        echo "</pre>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        if ($obj == null) {
            return 'loi';
        }
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
        $obj->product_price = $request->get('product_price');
        $obj->product_status = $request->get('product_status');
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->save();
        $request->session()->flash('message', 'Sửa sản phẩm thành công!');
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Product::find($id);
        $obj->product_status = 0;
        $obj->save();
        return 'Response::json([], 200)';
    }
    public function Unactive_product($id){
        $obj = Product::where('id','=',$id)->first();
        $obj->product_status = 0;
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        session()->flash('message', 'Ẩn sản phẩm thành công!');
        return Redirect::to('/product/');
    }
    public function Active_product($id){
        $obj = Product::where('id','=',$id)->first();
        $obj->product_status = 1;
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        session()->flash('message', 'Hiện sản phẩm thành công!');
        return Redirect::to('/product/');
    }

}
