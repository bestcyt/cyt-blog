@extends('home.home')

@section('content')
    <div id="gtco-main">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <ul id="gtco-post-list">
                        @if( count($users) ==0 )
                        <h3>该分类暂无文章</h3>
                        @endif
                        @foreach($users as $item)
                        <li class="full entry animate-box" data-animate-effect="fadeIn">
                            <a href="{{ url('article') }}/{{ $item->id }}" target="_blank">
                                <input type="hidden" name="article_detail">
                                <div class="entry-img col-md-6" style="background-image: {{ asset('images/img_1.jpg')  }}"></div>
                                <div class="entry-desc col-md-6" >
                                    <h3>{{ $item->id }}</h3>
                                    <p>{{ $item->desc }}</p>
                                </div>
                            </a>
                            <a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
                        </li>
                        @endforeach
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


            <div class="row">
                <div class="col-md-12 text-center">
                     <nav aria-label="Page navigation">
                         <div class="container">
                            @foreach ($users as $user)
                                {{ $user->name }}
                            @endforeach
                        </div>

                        {{ $users->links() }}
                    </nav>

                     <!-- <nav aria-label="Page navigation">
                        <ul class="pagination">
                           <!--  <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li> -->
                           <!--  <li class="active">
                            <a href="#">1z</a></li>
                            
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li> -->
                            <!-- <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li> -->
                        </ul>
                    </nav> 
                </div>
            </div>
        </div>
    </div>
    @endsection
