<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /*
     * @todo 博客首页
     */
    public function index(){

        //列出全部文章，分页


        return view('home.index');
    }
}
