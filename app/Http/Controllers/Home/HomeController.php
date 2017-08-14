<?php

namespace App\Http\Controllers\Home;

use App\Models\BlogArticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /*
     * @todo 博客首页
     */
    public function index(){

        //列出全部文章，分页
        $ar = BlogArticle::getAll();

//        dd($ar);
        return view('home.index');
    }

    public function article(){

    }

    public function cate(){

    }
}
