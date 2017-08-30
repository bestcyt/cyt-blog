@extends('layouts.admin.app')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">文章管理</a> &raquo; 编辑文章
    </div>
    <!--面包屑导航 结束-->

	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>编辑文章</h3>
        </div>
        {{--<div class="result_content">--}}
            {{--<div class="short_wrap">--}}
                {{--<a href="#"><i class="fa fa-plus"></i>新增文章</a><!-- --}}
                {{--<a href="#"><i class="fa fa-recycle"></i>批量删除</a>--}}
                {{--<a href="#"><i class="fa fa-refresh"></i>更新排序</a> -->--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap" >
        @if (count($errors) > 0)
            <div class="alert alert-danger" style="color: red;">
                <strong>编辑失败</strong> 输入不符合要求<br><br>
                {!! implode('<br>', $errors->all()) !!}
            </div>
        @endif
        <form action="{{ url('admin/articles/'.$article_edit->id) }}" method="post">
            {{ method_field('put') }}
         {{ csrf_field() }}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>文章分类：</th>
                        <td>
                            <select name="article_cate">
                                <option value="{{ $article_edit->cate }}">{{ $article_edit->cate_name }}</option>
                                <option value="1">php</option>
                                <option value="11">thinkCMF</option>
                                <option value="12">laravel</option>
                                <option value="2">mysql</option>
                                <option value="3">linux</option>
                                <option value="4">杂记</option>
                                <option value="5">other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>标题：</th>
                        <td>
                            <input type="text" class="lg" name="article_title" value="{{ $article_edit->title }}">
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>
                    <!-- <tr>
                        <th>作者：</th>
                        <td>
                            <input type="text" name="article_auth">
                            <span><i class="fa fa-exclamation-circle yellow"></i>这里是默认长度</span>
                        </td>
                    </tr> -->
                    <tr>
                        <th><i class="require">*</i>简介：</th>
                        <td>
                            <input type="text" class="lg" name="article_desc" value="{{ $article_edit->desc }}">
                            <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                        </td>
                    </tr>
                    <tr>
                        <th>单选框：</th>
                        <td>
                            <label for=""><input type="radio" name="">单选按钮一</label>
                            <label for=""><input type="radio" name="">单选按钮二</label>
                        </td>
                    </tr>
                    <!-- <tr>
                        <th>复选框：</th>
                        <td>
                            <label for=""><input type="checkbox" name="">复选框一</label>
                            <label for=""><input type="checkbox" name="">复选框二</label>
                        </td>
                    </tr> -->
                
                    <tr>
                        <th>详细内容：</th>
                        <td>
                            <textarea id="demo" style="display: none;" name="article_content">{{ $article_edit->content }}</textarea>
                        </td>
                    </tr>
                    <tr>
                       <th> </th>
                        <td>
                            <button class="layui-btn" type="sumbit">提交修改</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

@endsection

@section('script')
<script>
layui.use('layedit', function(){
  var layedit = layui.layedit;
    layedit.set({
        uploadImage: {
            url: '{{ url('admin/articles') }}' //接口url
            ,type: 'post' //默认post
        }
    });
  layedit.build('demo'); //建立编辑器
});
</script>
@endsection
