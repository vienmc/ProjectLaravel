<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        $data = array();
        $data['keyword'] = '';
        $product = Product::query()->where('product_status','=',1)->orderby('updated_at', 'desc');
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $product = $product->where('product_name', 'like', '%' . $request->get('keyword') . '%');
        }
//        if ($request->has('Min') && strlen($request->get('Min')) > 0 && $request->has('Max') && strlen($request->get('Max')) > 0) {
//            $data['Min'] = $request->get('Min');
//            $data['Max'] = $request->get('Max');
//            $from = $request->get('Min');
//            $to = $request->get('Max');
//            $product = $product->whereBetween('product', [$from, $to]);
//        }

        $data['all_product'] = $product->paginate(9)->appends($request->only('keyword'));
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();

//        $product_price = $request ->get('search_price_submit');
//        echo "<pre>";
//        print_r($product_price);
//        echo "</pre>";
        return view('pages.home')->with($data)
            ->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2);

    }

    public function sanpham(Request $request){

        $data = array();
        $data['keyword'] = '';
        $product = Product::query()->where('product_status','=',1)->orderby('updated_at', 'desc');
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $product = $product->where('product_name', 'like', '%' . $request->get('keyword') . '%');
        }
        $data['all_product'] = $product->paginate(9)->appends($request->only('keyword'));
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();

        return view('pages.product.sanpham')->with($data)
            ->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2);
    }
}
