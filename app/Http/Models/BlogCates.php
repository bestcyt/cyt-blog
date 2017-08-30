<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCates extends Model
{
    protected $table = 'blog_cates';
    public $timestamps = 'false';

    /*
     * @todo 根据分类id找出分类名称
     */
    public static function getCateNameById($cate_id){

        return static::where('id','=',$cate_id)->value('cate_desc');
    }

    /*
     * @todo 获取分类列表
     */
    public static function getCateList(){

        return static::paginate(10);
    }
}
