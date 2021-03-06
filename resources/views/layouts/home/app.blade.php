<!DOCTYPE HTML>
<!--
	Justice by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: #
-->
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href=" {{ base_path('bitbug_favicon.png') }}" type="image/x-icon"/>
    {{--<link rel="icon" href=" {{ asset('bitbug_favicon.png') }}" type="image/x-icon"/>--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('blog_config.blog_title.0') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="cyt-blog" />
    <meta name="keywords" content="cyt-blog" />
    <meta name="author" content="GetTemplates.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i|Roboto+Mono" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/blog_css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/blog_css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/blog_css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/blog_css/magnific-popup.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/blog_css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/blog_js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/blog_js/respond.min.js') }}"></script>
    <![endif]-->
    @yield('link')

</head>
<body>
@include('layouts.home.header')
@yield('content')
@include('layouts.home.footer')
</body>
@yield('script'))
<!-- jQuery -->
<script src="{{ asset('js/blog_js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/blog_js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/blog_js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/blog_js/jquery.waypoints.min.js') }}"></script>
<!-- Stellar -->
<script src="{{ asset('js/blog_js/jquery.stellar.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('js/blog_js/main.js') }}"></script>
</html>

