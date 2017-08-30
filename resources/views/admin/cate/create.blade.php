@extends('layouts.admin.app')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">文章管理</a> &raquo; 添加分类
    </div>
    <!--面包屑导航 结束-->

	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>新增分类</h3>
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
                <strong>新增失败</strong> 输入不符合要求<br><br>
                {!! implode('<br>', $errors->all()) !!}
            </div>
        @endif
        <form action="{{ url('admin/articles') }}" method="post">
         {{ csrf_field() }}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>文章分类：</th>
                        <td>
                            <select name="article_cate">
                                <option value="">==请选择==</option>
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
                        <th><i class="require">*</i>分类首个数字</th>
                        <td>
                            PHP:1  ;mysql:2  ;linux:3  ;杂记:4  ;other:5  ;
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类名称：</th>
                        <td>
                            <input type="text" class="lg" name="cate_name">
                            <p>50个字符内</p>
                        </td>
                    </tr>

                    <tr>
                        <th><i class="require">*</i>分类描述：</th>
                        <td>
                            <input type="text" class="lg" name="cate_desc">
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类描述</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类id：</th>
                        <td>
                            <input type="text" class="lg" name="cate_id">
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类描述</span>
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
                       <th> </th>
                        <td>
                            <button class="layui-btn" type="sumbit">提交</button>
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
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '{{ url('admin/articles') }}' //接口url
            ,type: 'post' //默认post
        }
    });
  layedit.build('demo'); //建立编辑器
});
</script>
@endsection
