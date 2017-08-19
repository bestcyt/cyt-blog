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

Route::get('/', 'Home\HomeController@view');

//前台文章资源路由，
Route::resource('article','Home\ArticlesController');
// Route::get('article/{id}','Home\HomeController@getModify');

Route::get('cate/{id}','Home\HomeController@view');


// Route::get('home','Home\HomeController@index');
// Route::get('w',function (){
//     return 'asdf';
// });

Auth::routes();
Route::get('/login', 'HomeController@index')->name('home');

/*
 * 后台管理员登录路由组
 */
Route::group(['middleware'=>'adminlogin','namespace'=>'Admin','prefix'=>'admin'],function (){

	//后台登录
    Route::match(['get','post'],'/login','LoginController@login');

    // 后台首页重定向
	Route::get('/index',function(){
    	return view('admin.index');
    });

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
//    Route::get('login','LoginController@login');

});


