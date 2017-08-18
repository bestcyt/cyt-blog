<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BlogArticles extends Model
{
    protected $table = "blog_articles";
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

    public static function insertArticle($request)
    {
        $article_data = [];
        $article_data['cate'] = $request->article_cate;
        $article_data['title'] = $request->article_title;
        // $article_data['auth'] = $request->article_auth;
        $article_data['desc'] = $request->article_desc;
        $article_data['content'] = $request->article_content;
        $article_data['create_time'] = time();
        $re = static::insert($article_data);
        
        return $re ;
    }
}
