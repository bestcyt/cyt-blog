<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\BlogArticles;

class ArticlesController extends Controller
{
    //
    /**
     * @todo articles View
     * @return [type] [description]
     */
    public function view(){
    	dd();
    }

    /**
     * @todo articles Post
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function postModify(Request $request)
    {
    	// dd($request);
    	
    	$re = BlogArticles::insertArticle($request);

    }


}
