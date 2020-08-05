<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\ContactUs;
use App\Product;
use Illuminate\Http\Request;

class ContactUsController extends Controller
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
        return view('pages.contact-us')->with('category', $category_product)->with('brand', $brand_product)->with('all_product', $all_product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new ContactUs();
        $obj->ContactUs_name = $request->get("ContactUs_name");
        $obj->ContactUs_email= $request->get("ContactUs_email");
        $obj->ContactUs_message= $request->get("ContactUs_message");
        $obj->ContactUs_subject= $request->get("ContactUs_subject");
        $obj->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
