<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\BlogCates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateController extends Controller
{

    public function index(){

        $cate_list = BlogCates::getCateList();

        return view('admin.cate.index')->with(['cates'=>$cate_list]);
    }

    /*
     * @todo create 新增分类
     */
    public function create(){


        return view('admin.cate.create');
        dd('新增分类');
    }
}
