<?php

namespace App\Http\Controllers;

use App\Account;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use mysql_xdevapi\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Category::where('name','like','%')->orderby('created_at', 'desc')->paginate(10)
            ->appends($request->only('id'))
            ->appends($request->only('keyword'));
        return view('Admin.Category.list')  ->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Category();
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');
        $obj->status = 1;
        $obj->save();
        return redirect('/categories/');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $obj =Category::find($id);
        if ($obj==null){
            return view('error')->with('msg', 'Categories is not found or has been deleted!');
        }
        $obj->status = 0;
        $obj->save();
        return Response::json([],200);
    }
    public function Unactive_categories($categories_id){
        $obj = Category::where('id','=',$categories_id)->first();
        $obj->status = 0;
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return Redirect::to('/categories/');
    }
    public function Active_categories($categories_id){
        $obj = Category::where('id','=',$categories_id)->first();
        $obj->status = 1;
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return Redirect::to('/categories/');
    }
    public function Edit_categories($id){
        $categories = Category::where('id','=',$id)->first();

        return view('Admin.Category.edit')->with('categories',$categories);
    }
    public function Update_categories(Request $request, $id){
        $obj = Category::where('id','=',$id)->first();
        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return Redirect::to('/categories');
    }
    public function FindByName(Request $request){
        $keyword = $request->keyword;
        $list = Category::where('name', 'like', '%' . $keyword . '%')->orderby('created_at', 'desc')->paginate(10);
        return view('Admin.Category.list')->with('list', $list);
    }
}
