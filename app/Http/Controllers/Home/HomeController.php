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
    public function view(Request $request){

        $ar = BlogArticles::getAllArticles();

        return view('home.home')->with(['articles'=>$ar]);
    }

    /**
     * [getModify description]
     * @return [type] [description]
     */
    public function getModify($id){

            dd($id);
//        dd($request);
//        $article_id = $request->id;

    }

    public function cate(){

    }


}
