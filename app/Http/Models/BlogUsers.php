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
    public static function checkAdmin(Request $request){
        //根据登录的是否管理员？判断session？
        
    }
}
