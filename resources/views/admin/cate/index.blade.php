@extends('layouts.admin.app')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">文章管理</a> &raquo; 文章分类
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap">

    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{ url('admin/cate/create') }}"><i class="fa fa-plus"></i>新增分类</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%">类别</th>
                        {{--<th class="tc">排序</th>--}}
                        <th class="tc">ID</th>
                        <th>描述</th>
                        <th>发布时间</th>
                        <th>更新时间</th>
                        {{--<th>评论</th>--}}
                        <th>操作</th>
                    </tr>
                    @foreach($cates as $cate)
                        <tr>
                            <td class="tc">77</td>
                            <td class="tc">
                                {{ $cate->id }}
                            </td>
                            <td>
                                <a href="#">{{ $cate->cate_desc }}</a>
                            </td>
                            <td>{{ date('Y-m-d',$cate->create_time) }}</td>
                            <td>{{ isset($cate->update_time)?date('Y-m-d',$cate->create_time):'无更新' }}</td>

                            <td>
                                <form action="{{ url('admin/cate/'.$cate->id.'/edit') }}" method="GET" style="display: inline;">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-info btn-sm">修改</button>
                                </form>
                                {{--<a href="{{ url('admin/articles/'.$article->id.'/edit') }}"><button  class="btn btn-info btn-sm">修改这个不行啊啊</button></a>--}}
                                <form action="{{ url('admin/cate/'.$cate->id) }}" method="POST" style="display: inline;">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm">删除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach



                    {{--<tr>--}}
                        {{--<td class="tc"><input type="checkbox" name="id[]" value="59"></td>--}}
                        {{--<td class="tc">--}}
                            {{--<input type="text" name="ord[]" value="0">--}}
                        {{--</td>--}}
                        {{--<td class="tc">59</td>--}}
                        {{--<td>--}}
                            {{--<a href="#">荣耀 6 (H60-L11) 3GB内存增强版 白色 移动4G手机</a>--}}
                        {{--</td>--}}
                        {{--<td>0</td>--}}
                        {{--<td>2</td>--}}
                        {{--<td>admin</td>--}}
                        {{--<td>2014-03-15 21:11:01</td>--}}
                        {{--<td></td>--}}
                        {{--<td>--}}
                            {{--<a href="#">修改</a>--}}
                            {{--<a href="#">删除</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                </table>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation">
                    <div class="container">
                        @foreach ($cates as $cate)
                            {{ $cate->name }}
                        @endforeach
                    </div>

                    {{ $cates->links() }}
                </nav>

            </div>
        </div>
    </form>

    <!--搜索结果页面 列表 结束-->

@endsection

@section('script')

@endsection
