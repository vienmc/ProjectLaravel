<?php

namespace App\Http\Controllers;

use App\Account;
use App\Subscribers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscribersController extends Controller
{
    public function add_email(Request $request){
        $obj = new Subscribers();
        $obj->email = $request->email_subscribers;
        $obj->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        if (Subscribers::where('email','=',$obj->email)->first()===null){
            Session::put('email_subscribers', $request->email_subscribers);
            Session::put('message', 'Đăng ký thành công');
            $obj->status = 1;
            $obj->save();
            return Redirect('/');
        }
        else{
            Session::put('message', 'Email này đã được đăng ký!');
            return Redirect('/');
        }
    }
}
