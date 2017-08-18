<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BlogLog extends Model
{
    protected $table = "blog_log";
    public $timestamps = false;

    public static function insertLog($array_log)
    {
    	static::insert($array_log);
    }

}
