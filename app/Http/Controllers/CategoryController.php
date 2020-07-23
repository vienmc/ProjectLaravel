<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Category::where('status', '=',1)->get();
        return view('categories.list')->with('list',$list);
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
        $obj =Category::find($id);
        if ($obj==null){
            return view('error')->with('msg', 'Categories is not found or has been deleted!');
        }
        return view('categories.detail')->with('obj',$obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj =Category::find($id);
        if ($obj==null){
            return view('error')->with('msg', 'Categories is not found or has been deleted!');
        }
        return view('categories.edit')->with('obj',$obj);
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
        $obj =Category::find($id);
        if ($obj==null){
            return view('error')->with('msg', 'Categories is not found or has been deleted!');
        }
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');
        $obj->status = 1;
        $obj->save();
        return redirect('/categories/');
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
}
