<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showpage1(){
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.blog.bloglist')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);;
    }public function showpage2(){
    $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
    $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
    $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
    return view('pages.blog.bloglistpage2')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);;
}
    public function showpage3(){
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.blog.bloglistpage3')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);;
    }
    public function showsingleblog1(){
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.blog.blogsingle.blogsinglepage1-1')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);;
    }
    public function showsingleblog2(){
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.blog.blogsingle.blogsinglepage1-2')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);;
    }
    public function showsingleblog3(){
        $category_product = Category::where('status','=',1)->orderby('updated_at', 'desc')->get();
        $brand_product = Brand::where('brand_status', 1)->orderby('updated_at', 'desc')->get();
        $all_product = Product::where('product_status','=',1)->orderby('updated_at', 'desc')->paginate(9);
        return view('pages.blog.blogsingle.blogsinglepage1-3')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);;
    }


}
