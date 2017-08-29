<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\BlogUsers;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    /**
     * @param  Request
     * @return [type]
     */
    public function login(Request $request){
//        dd($request);
        if ($request->method() == 'POST'){
            $validator = Validator::make($request->all(),[
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

            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $login_data['username'] = $request->input('username');
            $login_data['password'] = $request->input('password');

            //验证用户名密码是否符合->数据库
            $re_validate = BlogUsers::checkAdmin($login_data);
            // $pass = password_hash()
            if ($re_validate){
                Session::put('admin',$login_data['username']);
                return redirect('admin/index');
            }else{
                $request->flash();
                return back()->withInput()->with(['response'=>'用户名或密码错误~']);
            }

        }
        if (!Session::has('admin')){
            return view('admin.login');
        }else{
            return redirect('admin/index');
        }

    }

    /*
     * @todo 后台首页
     */
    public function view(){

        return view('admin.index');
    }

    /**
     * @param string
     */
    public function loginout()
    {
        // 清空session

        // 重定向到login
    }
}
