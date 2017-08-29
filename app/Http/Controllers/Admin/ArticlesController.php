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

    /*
     * @todo 添加文章
     */
    public function create()
    {
        return view('admin/article/create');
    }

    public function store(Request $request){

//        $file = $request->file('file');
//        if ($file->isValid()){
//            $file_name = 'tset.png';
//                 $path = $request->file('file')->storeAs(
//                            'contract',$file_name, 'contract'
//                        );
//        }
        if ($_FILES){
            foreach ($_FILES as $FILE){
                if ($FILE){
                    $filename = $FILE['name'];
                    copy($FILE['tmp_name'],public_path().'/up_images/article/'.$filename);
                    $src = config('blog_config.base_url.0').'/up_images/article/'.$filename;
                }
            }
        }
        return json_encode(['code'=>0,'msg'=>'daozheli','data'=>['src'=>$src]]);





    }


}
