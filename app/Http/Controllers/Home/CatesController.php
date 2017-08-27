<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\BlogArticles;

class CatesController extends Controller
{
    /**
     * `获取文章分类列表
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function index($id)
    {
    	$cate_id = $id;

    	$ar = BlogArticles::getArticlesListByCate($cate_id);

    	return view('home.home')->with(['users'=>$ar]);
    }
}
