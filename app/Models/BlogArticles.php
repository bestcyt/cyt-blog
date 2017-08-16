<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogArticles extends Model
{
    protected $table = "cyt_blog_articles";
    public $timestamps = false;

    public function getAll(){

        return 111;
    }

    /**
     * auth:cyt
     * @param  id[int]
     * @param  id[int]
     * @return id[int]
     */
    public function getUserInfoById($id,$iddd)
    {
    	return static::find($id);
    }
}
