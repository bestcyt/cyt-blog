<div id="gtco-main">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-12">
                <ul id="gtco-post-list">
                    @if( count($articles) ==0 )
                        <h3>该分类暂无00文章</h3>
                        @else
                        @foreach($articles as $item)
                            <li class="full entry animate-box" data-animate-effect="fadeIn">
                                <a href="{{ url('article') }}/{{ $item->id }}" target="_blank">
                                    <input type="hidden" name="article_detail">
                                    <div class="entry-img col-md-6" style="background-image:url({{ asset('images/img_1.jpg')  }})"></div>
                                    <div class="entry-desc col-md-6" >
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->desc }}</p>
                                    </div>
                                </a>
                                <a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
                            </li>
                    @endforeach
                    @endif


                <!-- <li class="two-third entry animate-box" data-animate-effect="fadeIn">
                            <a href="single.html">
                                <div class="entry-img" style="background-image: url(images/img_2.jpg"></div>
                                <div class="entry-desc">
                                    <h3>How Web Hosting Can Impact Page Load Speed</h3>
                                    <p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains.</p>
                                </div>
                            </a>
                            <a href="single.html" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
                        </li>
                        <li class="one-third entry animate-box" data-animate-effect="fadeIn">
                            <a href="single.html">
                                <div class="entry-img" style="background-image: url(images/img_3.jpg"></div>
                                <div class="entry-desc">
                                    <h3>How Web Hosting Can Impact Page Load Speed</h3>
                                    <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                </div>
                            </a>
                            <a href="single.html" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
                        </li> -->

                </ul>
            </div>
        </div>




    </div>
</div>

<div class="row">
    <div class="col-md-12 text-center">
        {{--{!! PaginateRoute::renderPageList($articles) !!}--}}
        <nav aria-label="Page navigation">
            @if(PaginateRoute::hasPreviousPage())
                <a href="{{ PaginateRoute::previousPageUrl() }}">Previous</a>
            @endif
            {!! PaginateRoute::renderPageList($articles) !!}
            @if(PaginateRoute::hasNextPage($articles))
                <a href="{{ PaginateRoute::nextPageUrl($articles) }}">Next</a>
            @endif
            {{--<div class="container">--}}
                {{--@foreach ($articles as $article)--}}
                    {{--{{ $article->name }}--}}
                {{--@endforeach--}}
            {{--</div>--}}

            {{--{{ $articles->links() }}--}}
        </nav>

    </div>
</div>