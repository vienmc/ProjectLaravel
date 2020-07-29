<?php

namespace App\Http\Controllers;

use App\Account;
use App\Apartments;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Account::where('email','like','%')->orderby('created_at', 'desc')->paginate(10)
            ->appends($request->only('account_id'))
            ->appends($request->only('keyword'));
        return view('Admin.Account.list')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Account.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Account();
        $obj->email = $request->email;
        $obj->name = $request->name;
        $obj->phone = $request->phone;

        $salt = $this->generateRandomString(5);
        $password = $request->password;
        $passwordHash = md5($salt . $password);

        $obj->salt = $salt;
        $obj->password = $passwordHash;

        $obj->role = $request->roles;
        $obj->status = $request->status;
        $obj->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
//                echo "<pre>";
//        print_r($obj);
//        echo "</pre>";
        $obj->save();
        session::put('message', 'Tạo tài khoản thành công');
        return Redirect::to('/account');
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

    public function Unactive_account($account_id){
        $account = Account::where('id','=',$account_id)->first();
        $account->status = 0;
        $account->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $account->save();
        session::put('message', 'Khóa tài khoản thành công');
        return Redirect::to('/account');
    }

    public function Active_account($account_id){
        $account = Account::where('id','=',$account_id)->first();
        $account->status = 1;
        $account->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $account->save();
        session::put('message', 'Kích hoạt tài khoản thành công');
        return Redirect::to('/account');
    }

    public function Edit_account($id){
        $account = Account::where('id','=',$id)->first();
//                        echo "<pre>";
//        print_r($account);
//        echo "</pre>";
        return view('Admin.Account.edit')->with('account',$account);
    }

    public function Update_account(Request $request, $id){
        $account = Account::where('id','=',$id)->first();
        $account->name = $request->name;
        $account->phone = $request->phone;
        $account->role = $request->roles;
        $account->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $account->save();
        session::put('message', 'Cập nhập tài khoản thành công');
        return Redirect::to('/account');
    }

    public function FindByEmail(Request $request){
        $keyword = $request->keyword;
        $list = Account::where('email', 'like', '%' . $keyword . '%')->orderby('created_at', 'desc')->paginate(10)->appends($request->only('keyword'));
        return view('Admin.Account.list')->with('list', $list);
    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
