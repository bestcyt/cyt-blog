<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\BlogCates;

class BlogArticles extends Model
{
    protected $table = "blog_articles";
    public $timestamps = false;

    public static function getAllArticles(){

        $article_list = static::orderBy('create_time','desc')->paginate(3);
        return $article_list;
    }


    /*
     * @todo 新增文章
     */
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

    /*
     * @todo 根据id获取文章内容
     */
    public static function getArticleInfo($article_id)
    {
        $article = static::find($article_id);
//        $re_article = self::changeCateToName($article);
        if($article){
            $article->cate_name = BlogCates::getCateNameById($article->cate);
        }
        return $article;
    }

    /*
     * @todo 将cate转换为cate_name,做成模型关联吧
     * type 为0，为一层的文章；为1为文章列表
     */
    public static function changeCateToName($article,$type=0){
        if($type){
            foreach ($article as $ar){
                $ar->cate_name = BlogCates::getCateNameById($ar->cate);
            }
        }else{
            $article->cate_name = BlogCates::getCateNameById($article->cate);
        }
        return $article;
    }

    /*
     * @todo 更新文章内容
     */
    public static function updateArticle($article_id,$request){

        $article_up_data['cate'] = $request->input('article_cate');
        $article_up_data['title'] = $request->input('article_title');
        $article_up_data['desc'] = $request->input('article_desc');
        $article_up_data['content'] = $request->input('article_content');
        $article_up_data['update_time'] = time();

        return static::where('id','=',$article_id)->update($article_up_data);
    }

    /*
     * @todo 获取文章列表
     */
    public static function getArticlesList($request,$cate=0){

        if($cate !=0){
            return static::where('cate','=',$cate)->orderBy('create_time','desc')->paginate(10);
        }

        return static::orderBy('create_time','desc')->paginate(10);
    }

    /*
     * @todo 删除文章
     */
    public static function deleteArticleById($article_id){

        return static::destroy($article_id);
    }

    /*
     * @todo 根据类别和关键字查询文章
     */
    public static function getArticleListByKey($request){

        $cate = $request->input('cate');
        $keyword = $request->input('keywords');
        if($cate!=0){
            if($keyword){
                $re = static::where([
                    ['cate','=',$cate],
                    ['content','like',"%$keyword%"],
                ])->orWhere([
                    ['cate','=',$cate],
                    ['title','like',"%$keyword%"],
                ])->orWhere([
                    ['cate','=',$cate],
                    ['desc','like',"%$keyword%"]
                ])->orderBy('create_time','desc')->paginate(10);
            }else{
                $re = static::where('cate','=',$cate)->orderBy('create_time','desc')->paginate(10);
            }
        }else{
            if($keyword){
                $re = static::where([
                    ['content','like',"%$keyword%"],
                ])->orWhere([
                    ['title','like',"%$keyword%"]
                ])->orWhere([
                    ['desc','like',"%$keyword%"]
                ])->orderBy('create_time','desc')->paginate(10);
            }else{
                $re = static::orderBy('create_time','desc')->paginate(10);
            }
        }

        return $re;

    }



    /**
     * @todo  根据类别获取文章
     */
    public static function getArticlesListByCate($cate_id)
    {
        return static::where('cate','=',$cate_id)->orderBy('create_time','desc')->paginate(3);
    }
}
