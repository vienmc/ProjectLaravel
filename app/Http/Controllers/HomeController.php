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
        $data['all_product'] = $product->paginate(9)->appends($request->only('keyword'));
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        return view('pages.home')->with($data)->with('category', $category_product)->with('brand', $brand_product);

    }
}
