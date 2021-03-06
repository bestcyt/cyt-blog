<?php

namespace App\Http\Middleware;

use App\Http\Models\BlogUsers;
use Closure;
use Illuminate\Support\Facades\Session;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //调用user model判断是否为管理员，
        //在中间件判断用户是否Admin，不需要在controller中判断；先判断是否有这个的session
        if (!Session::has('admin')){

            return redirect('admin/login')->with(['response'=>'登录信息已过期，请重新登录']);
        }

        return $next($request);
    }
}
