<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\AccountRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function Index()
    {
        return view('Admin.login');
    }

    public function ShowDashbord(Request $request)
    {
        return view('Admin.layout');
    }

    public function DoLogin(Request $request)
    {
        $email = $request->email;
        $account = Account::where('email','=',$email)->first();
//        echo "<pre>";
//        print_r($account);
//        echo "</pre>";
        if ($account) {
            $passwordHash = $account->password;
            $salt = $account->salt;
            $password = $request->password;
            $md5Password = md5($salt.$password);
            if ($passwordHash == $md5Password){
                Session::put('admin_name', $account->name);
                Session::put('admin_id', $account->id);
                Session::put('admin_role', $account->role);
            return Redirect::to('/dashboard');
            }
            else{
                Session::put('message', 'Mật khẩu không đúng');
                return Redirect::to('/login');
            }
        } else {
            Session::put('message', 'Email không tồn tại');
            return Redirect::to('/login');
        }
    }

    public function SignUp()
    {
        return view('Admin.signup');
    }

    public function DoSignUp(AccountRequest $request)
    {
        $request->validated();
        $obj = new Account();
        $obj->email = $request->email;
        $obj->name = $request->name;
        $obj->phone = $request->phone;

        $salt = $this->generateRandomString(5);
        $password = $request->password;
        $passwordHash = md5($salt . $password);

        $obj->salt = $salt;
        $obj->password = $passwordHash;
        $obj->role = 1;
        $obj->status = 1;
        $obj->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return view('Admin.login');
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
