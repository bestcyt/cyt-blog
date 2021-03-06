<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('style/css/ch-ui.admin.css') }}">
	<link rel="stylesheet" href="{{ asset('style/font/css/font-awesome.min.css') }}">
</head>
<body style="background:#F3F3F4;">
@inject('Session', 'Illuminate\Support\Facades\Session')
	<div class="login_box">
		<h1>Blog</h1>
		<h2>欢迎使用博客管理平台</h2>
		<div class="form">
			{{--<p style="color:red">用户名错误</p>--}}
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li></li><p style="color:red">{{ $error }}</p>
						@endforeach
					</ul>
				</div>
			@endif
			@if($Session::has('response'))
				<div class="form-group">
					{{--<div class="col-md-3"></div>--}}
					<label for="email" class="col-md-5 control-label" style="color: red">{{ $Session::get('response') }}</label>
					{{--<div class="col-md-3"></div>--}}
				</div>
			@endif
			<form action="{{ url('admin/login') }}" method="post">
				{{ csrf_field() }}

				<ul>
					<li>
					<input type="text" name="username" class="text" value="{{ old('username') }}"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text" value="{{ old('password') }}"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="captcha"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="{{captcha_src()}}" onclick="this.src='/captcha/default?'+Math.random()">
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.houdunwang.com" target="_blank">http://www.houdunwang.com</a></p>
		</div>
	</div>
</body>
</html>