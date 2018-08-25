<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function getLogin(){
            return view('backend.login');
    }

    public function postLogin(Request $request){
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if ($request->remember = 'Remember Me') {
            $remember = true;
        }
        else{
            $remember = false;
        }

        if(Auth::attempt($arr , $remember)){
            return redirect('backend/home');
        }
        else{
            return back()->withInput()->with('error','tai khoan hoac mat khau chua dung xin vui long nhap lai');
        }

    }

    public function getLogout(){
        Auth::logout();
        return redirect('backend/');
    }
}
