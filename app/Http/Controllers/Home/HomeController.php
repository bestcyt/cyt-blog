<?php

namespace App\Http\Controllers\Home;

use App\Http\Models\BlogArticles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /*
     * @todo 博客首页
     */
    public function view($id=0){


        if ($id) {
            $cate_id = $id;
            $ar = BlogArticles::getArticlesListByCate($cate_id);
        }else{
             //列出全部文章，分页
        $ar = BlogArticles::getAllArticles();
        }
       
        // dd($ar)

        return view('home.index')->with(['users'=>$ar]);
    }

    /**
     * [getModify description]
     * @return [type] [description]
     */
    public function getModify($id){

            dd($id);
        dd($request);
        $article_id = $request->id;

    }

    public function cate(){

    }


}
