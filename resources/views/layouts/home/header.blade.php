<div class="gtco-loader"></div>

<div id="page">
    <nav class="gtco-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 text-left">
                    <div id="gtco-logo"><a href="{{ env('APP_ONLINE') == 'true' ? 'http://bestcyt.cn':'http://cyt-blog.cn/' }}">blog<span>.</span></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul >
                        <li class="has-dropdown">
                            <a href="#">PHP</a>
                            <ul class="dropdown">
                                <li><a href=" {{ url('cate') }}/1">php</a></li>
                                <li><a href="{{ url('cate') }}/11">Thinkphp</a></li>
                                <li><a href="{{ url('cate') }}/12">laravel</a></li>
                                <!-- <li><a href="#">Django</a>s</li> -->
                            </ul>
                        </li>
                        <li ><a href="{{ url('cate')}}/2">Mysql</a></li>
                        <li><a href="{{ url('cate') }}/3">Linux</a></li>
                        <li><a href="{{ url('cate') }}/4">other</a></li>
                        <li><a href="{{ url('cate') }}/5">杂记</a></li>
                    </ul>
                </div>
            </div>
           <!--  <div class="row">
                {{--<div class="col-xs-2 text-left">--}}
                    {{--<div id="gtco-logo"><a href="index.html">search<span>.</span></a></div>--}}
                {{--</div>--}}
                <div class="col-xs-10 text-right menu-1">
                    <input type="text" placeholder="search" />
                </div>
                <div class="col-xs-2 ">
                    <button class="btn btn-success btn-xs">go</button>
                </div>

            </div> -->
        </div>
    </nav>

    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url({{ asset('images/img_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-left">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                            <span class="date-post"><h3 style="color: #FBFBFB">愿你历经千帆</h3></span>
                            <h1 class="mb30"><a href="#">归来时仍是少年~</a></h1>
                            <p><a href="#" class="text-link">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>