<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // tạo biến data là một mảng chứa dữ liệu trả về.
        $data = array();
//        $data['category_id'] = 0;
//        $data['keyword'] = '';
//        $categories = Category::all();
        $order_list = Order::query()->orderby('updated_at', 'desc');
//        if ($request->has('category_id') && $request->get('category_id') != 0) {
//            $data['category_id'] = $request->get('category_id');
//            $product_list = $product_list->where('category_id', '=', $request->get('category_id'));
//        }
//        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
//            $data['keyword'] = $request->get('keyword');
//            $product_list = $product_list->where('product_name', 'like', '%' . $request->get('keyword') . '%');
//        }
//        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
//            $data['start'] = $request->get('start');
//            $data['end'] = $request->get('end');
//            $from = date($request->get('start') . ' 00:00:00');
//            $to = date($request->get('end') . ' 23:59:00');
//            $product_list = $product_list->whereBetween('created_at', [$from, $to]);
//        }
        $data['list'] = $order_list->paginate(9);
//            ->appends($request->only('category_id'))
//            ->appends($request->only('keyword'))
//            ->appends($request->only('dates'));
//        $data['categories'] = $categories;

        return view('Admin.Order.manage_order')->with($data);
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
        //
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
