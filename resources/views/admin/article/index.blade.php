@extends('layouts.admin.app')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">文章管理</a> &raquo; 文章列表
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap">
        <form action="{{ url('') }}" method="post">
            <table class="search_tab">
                <tr>
                    <th width="120">选择分类:</th>
                    <td>
                        <select name="choose">
                            <option value="0">全部</option>
                            <option value="1">php</option>
                            <option value="11">thinkCMF</option>
                            <option value="12">laravel</option>
                            <option value="2">mysql</option>
                            <option value="3">linux</option>
                            <option value="4">杂记</option>
                            <option value="5">other</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" class="btn btn-success" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{ url('admin/articles/create') }}"><i class="fa fa-plus"></i>新增文章</a>
                    <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%"><input type="checkbox" name=""></th>
                        {{--<th class="tc">排序</th>--}}
                        <th class="tc">ID</th>
                        <th>标题</th>
                        <th>简介</th>
                        <th>阅读量</th>
                        <th>发布人</th>
                        <th>发布时间</th>
                        <th>更新时间</th>
                        {{--<th>评论</th>--}}
                        <th>操作</th>
                    </tr>
                    @foreach($article_list as $article)
                        <tr>
                            <td class="tc"><input type="checkbox" name="id[]" value=""></td>
                            <td class="tc">
                                {{ $article->id }}
                            </td>
                            <td class="tc">{{ $article->title }}</td>
                            <td>
                                <a href="#">{{ $article->desc }}</a>
                            </td>
                            <td>0</td>
                            <td>{{ $article->uid }}</td>
                            <td>{{ date('Y-m-d',$article->create_time) }}</td>
                            <td>{{ isset($article->update_time)?date('Y-m-d',$article->create_time):'无更新' }}</td>

                            <td>
                                <form action="{{ url('admin/articles/'.$article->id.'/edit') }}" method="GET" style="display: inline;">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-info btn-sm">修改</button>
                                </form>
                                {{--<a href="{{ url('admin/articles/'.$article->id.'/edit') }}"><button  class="btn btn-info btn-sm">修改这个不行啊啊</button></a>--}}
                                <form action="{{ url('admin/articles/'.$article->id) }}" method="POST" style="display: inline;">
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
                        @foreach ($article_list as $article)
                            {{ $article->name }}
                        @endforeach
                    </div>

                    {{ $article_list->links() }}
                </nav>

            </div>
        </div>
    </form>

    <!--搜索结果页面 列表 结束-->

@endsection

@section('script')

@endsection
