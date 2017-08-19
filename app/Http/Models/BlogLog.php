<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BlogLog extends Model
{
    protected $table = "blog_log";
    public $timestamps = false;


    /**
     * 记录log
     * @param  [type] $array_log [description]
     * @return [type]            [description]
     */
    public static function insertLog($array_log)
    {
    	static::insert($array_log);
    }

}
