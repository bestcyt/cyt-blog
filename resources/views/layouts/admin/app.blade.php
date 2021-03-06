<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('style/css/ch-ui.admin.css') }}">
	<link rel="stylesheet" href="{{ asset('style/font/css/font-awesome.min.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/blog_css/bootstrap.css') }}">

	<script type="text/javascript" src="{{ asset('style/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/ch-ui.admin.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('layui/css/layui.css') }}">
    <script type="text/javascript" src="{{ asset('layui/layui.js') }}"></script>
    @yield('head')
</head>
<body>
	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">后台管理模板</div>
			<ul>
				<li><a href="#" class="active">首页</a></li>
				<li><a href="#">管理页</a></li>
				<li><a href="#">管理页</a></li>
				<li><a href="#">管理页</a></li>
				<li><a href="#">管理页</a></li>

			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：{{ $admin }}</li>
				<li><a href="{{ url('admin/change_passwd') }}" target="main">修改密码</a></li>
				<li><a href="{{ url('admin/loginout') }}">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->
	
	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>文章管理</h3>
                <ul class="sub_menu">
                    <li><a href="{{ url('admin/articles/create')}}" ><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>
                    <li><a href="{{ url('admin/articles')}}" ><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>
                    {{--<li><a href="{{ url('admin/articles/tab')}}"><i class="fa fa-fw fa-list-alt"></i>tab页</a></li>--}}
                    <li><a href="{{ url('admin/cate')}}"><i class="fa fa-fw fa-image"></i>文章分类</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
                <ul class="sub_menu">
                    <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
                    <li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>备份还原</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
                <ul class="sub_menu">
                    <li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
                    <li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
                    <li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
                    <li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
                </ul>
            </li>
			<li>
				<h3><i class="fa fa-fw fa-thumb-tack"></i>用户管理</h3>
				<ul class="sub_menu">
					<li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>用户列表</a></li>
					{{--<li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>--}}
					{{--<li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>--}}
					{{--<li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>--}}
				</ul>
			</li>
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!-- iframe部分 -->
	<div class="main_box">
		@yield('content')
		<!-- <iframe src="info.html" frameborder="0" width="100%" height="100%" name="main"></iframe>  -->
	</div>




<div class="bottom_box">
		陈一锑的个人博客后台 <a href="http://www.bestcyt.cn">http://www.bestcyt.cn</a>.
	</div>
	<!--底部 结束-->
</body>

@yield('script')
<!-- Bootstrap -->
<script src="{{ asset('js/blog_js/bootstrap.min.js') }}"></script>
</html>