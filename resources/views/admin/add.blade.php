@extends('admin/layouts/app')

@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
    </div>
    <!--面包屑导航 结束-->

	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增文章</a><!-- 
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a> -->
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form action="{{ url('admin/articles/add') }}" method="post" enctype="multipart/form-data" >
         {{ csrf_field() }}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>文章分类：</th>
                        <td>
                            <select name="article_cate">
                                <option value="">==请选择==</option>
                                <option value="7">laravel</option>
                                <option value="8">PHP</option>
                                <option value="9">java</option>
                                <option value="10">随想</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>标题：</th>
                        <td>
                            <input type="text" class="lg" name="article_title">
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
                            <input type="text" class="lg" name="article_desc">
                            <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>缩略图：</th>
                        <td><input type="file" name="article_img"></td>
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
                            <textarea id="demo" style="display: none;" name="article_content"></textarea>
                        </td>
                    </tr>
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
  layedit.build('demo'); //建立编辑器
});
</script>
@endsection
