<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function login(Request $request){
//        dd($request);
        if ($request->method() == 'POST'){
//            dd($request,Session::all());
            $this->validate($request,[
                'username'=> 'required|min:1',
                'password'=> 'required|min:1',
                'captcha'=> 'required|captcha',
            ],[
                'required' => ' :attribute 不能为空.',
                'captcha' => ' :attribute 错误.',
                'min' => ' :attribute 长度不足.',
            ],[
                'username'=>'用户名',
                'password'=>'密码',
                'captcha'=>'验证码',
            ]);

            //验证用户名密码是否符合->数据库

            //记录session

            return view('admin.index');
        }
        return view('admin.login');
    }
}
