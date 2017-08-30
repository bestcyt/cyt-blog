<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\BlogArticles;
use Validator;

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
     * @todo 文章的跳转index
     */
    public function index(Request $request){
        //获取文章列表
        $article_list = BlogArticles::getArticlesList($request);

        return view('admin/article/index')->with(['article_list'=>$article_list]);
    }

    /*
     * @todo 删除文章
     */
    public function destroy($article_id){

        $re = BlogArticles::deleteArticleById($article_id);
        if ($re){
            return back();
        }
        dd('delete failed');

    }

    /*
     * @todo edit编辑文章
     */
    public function edit($article_id){

        $article_edit = BlogArticles::getArticleInfo($article_id);

        return view('admin/article/edit')->with(['article_edit'=>$article_edit]);
    }

    /*
     * @todo update 更新文章
     */
    public function update($article_id,Request $request){
        if (BlogArticles::updateArticle($article_id,$request)){
            return redirect('admin/articles');
        }
        dd('error');
        return 'error';

    }

    /*
     * @todo create 添加文章
     */
    public function create()
    {
        return view('admin/article/create');
    }

    /*
     * @todo store 提交文章
     */
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
                    $filename = time().'_'.$FILE['name'];
                    copy($FILE['tmp_name'],public_path().'/up_images/article/'.$filename);
                    $src = config('blog_config.base_url.0').'/up_images/article/'.$filename;
                }
            }
            return json_encode(['code'=>0,'msg'=>'success','data'=>['src'=>$src]]);
        }

        if ($request->method() == 'POST'){
            $validator = Validator::make($request->all(),[
                'article_cate'=> 'required',
                'article_title'=> 'required',
                'article_desc'=> 'required'
            ],[
                'required' => ' :attribute 不能为空.'
            ],[
                'article_cate'=>'文章分类',
                'article_title'=>'文章标题',
                'article_desc'=>'文章描述',
            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $insert_article_re = BlogArticles::insertArticle($request);
            if ($insert_article_re){
                return redirect('admin/articles');
            }
            dd('xxx');
        }



    }


}
