<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{
    protected $table = 'cyt_blog_article';
    protected $timesstamps = false;

    /*
     * @TODO 返回文章列表
     */
    public static function getAll($cate = 0){

        return 111;
    }

}
