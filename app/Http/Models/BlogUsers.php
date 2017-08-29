<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BlogUsers extends Model
{
    protected $table = 'blog_users';
    public $timestamps = 'false';

    /*
     * @todo 后台登录判断
     */
    public static function checkAdmin($login_data){
        //根据登录的是否管理员？判断session？
        $username = $login_data['username'];
        if (static::where('username','=',$username)->first()){
            $passwd = static::where('username','=',$username)->value('password');
            if($passwd == $login_data['password']){
                return true;
            }
        }
        return false;
    }
}
