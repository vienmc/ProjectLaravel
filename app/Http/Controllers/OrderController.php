<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Order;
use App\Product;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function change_status($id,Request $request){
    $order = Order::find($id);
    $order->shipping_status = $request->ship_status;
    $order->updated_at = Carbon::now()->format('Y-m-d H:i:s');
    $order->save();
    Session::put('message','Cập nhật thành công!');
    return Redirect::to('/order-admin');
}
    public function index(Request $request)
    {
        // tạo biến data là một mảng chứa dữ liệu trả về.
        $data = array();
        $data['shipping_status']=0;
        $data['keyword_madonhang'] = '';
        $data['keyword_tenkhachhang'] = '';
        $data['keyword_sodienthoai'] = '';
        $order_list = Order::query()->orderby('updated_at', 'desc');
        if ($request->has('shipping_status') && $request->get('shipping_status') > 0) {
            $data['shipping_status'] = $request->get('shipping_status');
            $order_list = $order_list->where('shipping_status', '=', $request->get('shipping_status'));
        }
        if ($request->has('shipping_status') && $request->get('shipping_status') ==0) {
            $data['shipping_status'] = $request->get('shipping_status');
        }
        if ($request->has('keyword_madonhang') && strlen($request->get('keyword_madonhang')) > 0) {
            $data['keyword_madonhang'] = $request->get('keyword_madonhang');
            $order_list = $order_list->where('id', 'like', '%' . $request->get('keyword_madonhang') . '%');
        }
        if ($request->has('keyword_tenkhachhang') && strlen($request->get('keyword_tenkhachhang')) > 0) {
            $data['keyword_tenkhachhang'] = $request->get('keyword_tenkhachhang');
            $order_list = $order_list->where('shipping_name', 'like', '%' . $request->get('keyword_tenkhachhang') . '%');
        }if ($request->has('keyword_sodienthoai') && strlen($request->get('keyword_sodienthoai')) > 0) {
            $data['keyword_sodienthoai'] = $request->get('keyword_sodienthoai');
            $order_list = $order_list->where('shipping_phone', 'like', '%' . $request->get('keyword_sodienthoai') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $order_list = $order_list->whereBetween('created_at', [$from, $to]);
        }
        $orders = Order::all();

        $data['list'] = $order_list->paginate(9)
            ->appends($request->only('dates'))
            ->appends($request->only('order_status'))
            ->appends($request->only('keyword'))
            ->appends($request->only('keyword_tenkhachhang'))
            ->appends($request->only('keyword_sodienthoai'));

        return view('Admin.Order.manage_order')->with($data)->with(compact('orders'));
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
        $obj = Order::find($id);
        return view('Admin.Order.detail_order')->with('obj', $obj);
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
