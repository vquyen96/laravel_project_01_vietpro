<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function getLogin(){

    	return view('backend.login');
    }
    public function postLogin(Request $request){
    	$arr = ['email'=>$request->email, 'password'=>$request->password];
    	if (Auth::attempt($arr)) {
    		return redirect()->intended('admin/home');
    	}
    	else{
    		return back()->withInput()->with('error','Tài khoản khặc mật khẩu chưa đúng');
    	}
    }
}
