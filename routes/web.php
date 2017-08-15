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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home','Home\HomeController@index');
Route::get('w',function (){
    return 'asdf';
});

Auth::routes();

Route::get('/login', 'HomeController@index')->name('home');

/*
 * 后台管理员登录路由组
 */
Route::group(['middleware'=>'adminlogin','namespace'=>'Admin','prefix'=>'admin'],function (){

    Route::match(['get','post'],'/login','LoginController@login');
//    Route::get('login','LoginController@login');

});


