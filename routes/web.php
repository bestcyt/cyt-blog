<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//前台首页
Route::get('/', 'Home\HomeController@view');

//前台分类文章路由
Route::get('cate/{id}','Home\CatesController@index');

//前台文章资源路由，
Route::get('article/{id}','Home\ArticlesController@index');


//Auth::routes();
//Route::get('/login', 'HomeController@index')->name('home');

/*
 * 后台管理员登录路由组
 */


//拥有管理员权限，中间件判断过滤
Route::group(['namespace'=>'Admin','prefix'=>'admin'],function (){
    //后台登录
    Route::match(['get','post'],'/login','LoginController@login');

    Route::match('get','/loginout','LoginController@loginout');

    Route::group(['middleware'=>['admin.login']],function (){
        // 后台首页重定向
        Route::get('/index','LoginController@view');

        //文章管理资源路由
        Route::resource('articles','ArticlesController');

        // 增加文章
        Route::get('/articles/add',function(){
            return view('admin.add');
        });
        Route::post('articles/add','ArticlesController@postModify');

        // 文章列表
        Route::get('/articles/list',function(){
            return view('admin.list');
        });

        // 待定
        Route::get('/articles/tab',function(){
            return view('admin.tab');
        });

        // 图片待定
        Route::get('/articles/img',function(){
            return view('admin.img');
        });
    });

//    Route::get('login','LoginController@login');

});



