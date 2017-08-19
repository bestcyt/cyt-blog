<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\BlogArticles;

class ArticlesController extends Controller
{
	/**
	 * 文章详情
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
    public function show($id)
    {
    	$article_id = $id;
    	$article_detail = BlogArticles::getArticleInfo($article_id);

    	return view('home.article_detail')->with(['article_detail' => $article_detail]);
    }
}
