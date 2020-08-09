<?php

namespace App\Http\Controllers;
use App\Http\Requests\BrandValidate;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Session;
use App\Brand;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['keyword'] = '';
        $brand = Brand::all();
        $brand1= Brand::query();
        if (($request->has('brand_id') && $request->has('brand_status' )) && (strlen($request->get('brand_id')) && strlen($request->get('brand_status'))) > 0) {
            $status = Brand::where('id','=',$request->get('brand_id'))->first();
            if ($request->get('brand_status') == 1){
                $status->brand_status = 0;
                session::put('message', 'Khóa thương hiệu sản phẩm thành công');
                $status->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            } if ($request->get('brand_status') == 0){
                $status->brand_status = 1;
                session::put('message', 'kích hoạt thương hiệu sản phẩm thành công');
                $status->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            }
            $status->save();
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $brand1 = $brand1->where('brand_name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $brand1 = $brand1->whereBetween('created_at', [$from, $to]);
        }
        $data['link'] = $brand1->orderBy('updated_at','desc')->paginate(10);
        $data['list'] = $brand1->get();
        return view('Admin.Brand.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Brand.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandValidate $request)
    {
        $request->validated();
        $obj = new Brand();
        $obj->brand_name = $request->get('brand_name');
        $obj->brand_desc = $request->get('brand_desc');
        $obj->brand_status = $request->get('brand_status');
        $obj->save();
        session::put('message', 'Thêm mới sản phẩm thành công');
        return redirect('/brand/');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Brand::find($id);
        return view('Admin.Brand.Edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandValidate $request, $id)
    {
        $request->validated();
        $obj = Brand::find($id);
        $obj->brand_name = $request->get('brand_name');
        $obj->brand_desc = $request->get('brand_desc');
        $obj->brand_status = $request->get('brand_status');
        $obj->save();
        session::put('message', 'Cập nhật thương hiện sản phẩm thành công');
        return redirect('/brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Brand::find($id);
        $obj->delete();
        return Response::json([], 200);
    }


}
