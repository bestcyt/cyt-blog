<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/24
 * Time: 11:51
 */

namespace App\Http\ViewComposers;


use App\Http\Models\BlogUsers;
use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class layoutAdminComposer
{

    public function compose(View $view){

        //@todo 从session拿数据

        $view->with(['admin'=>'123333']);
    }
}