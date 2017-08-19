@extends('layouts/home/home_layout')
		
		@section('content')

	
	<div id="gtco-maine">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12">
					<article class="mt-negative col-md-12">
						<div class="text-left content-article col-md-12">
							<div class="row">
								<div class="col-lg-8 col-md-8 cp-r animate-box">
									<p>{!! $article_detail->content !!}</p>

									<!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. </p>

									<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> -->
								</div>
								<div class="col-lg-4 animate-box">
									<div class="gtco-highlight right">
										<h4>{{ $article_detail->title }}</h4>
										<p>{{ $article_detail->desc }}</p>
									</div>
								</div>
							</div>

							<!-- <div class="row row-pb-sm">
								<div class="col-md-12 animate-box">
									<blockquote>
										<p>&ldquo;She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove &rdquo; <cite>&mdash; Jean Smith</cite></p>
									</blockquote>
								</div>
							</div>

							<div class="row row-pb-sm">
								<div class="col-lg-6 col-md-12 animate-box">
									<figure>
										<img src="images/img_1.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co" class="img-responsive">
										<figcaption>This is a sweet image caption. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</figcaption>
									</figure>
								</div>
								<div class="col-lg-6 col-md-12 cp-l animate-box">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. </p>

									<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large <a href="#">language</a> ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								</div>
							</div>

							<div class="row row-pb-sm">
								<div class="col-lg-6 col-lg-push-6 col-md-12 col-md-push-0 animate-box">
									<figure>
										<img src="images/img_4.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co" class="img-responsive">
										<figcaption>This is a sweet image caption. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</figcaption>
									</figure>
								</div>
								<div class="col-lg-6 col-lg-pull-6 col-md-12 col-md-pull-0 cp-r animate-box">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. </p>

									<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large <a href="#">language</a> ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12 animate-box">
									<h2>Pointing has no control about the blind texts</h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large <a href="#">language</a> ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
								</div>
								<div class="col-md-4 animate-box">
									<figure>
										<img src="images/img_5.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co" class="img-responsive">
										<figcaption>This is a sweet image caption. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</figcaption>
									</figure>
								</div>
								<div class="col-md-4 animate-box">
									<figure>
										<img src="images/img_6.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co" class="img-responsive">
										<figcaption>This is a sweet image caption. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</figcaption>
									</figure>
								</div>
								<div class="col-md-4 animate-box">
									<figure>
										<img src="images/img_7.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co" class="img-responsive">
										<figcaption>This is a sweet image caption. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</figcaption>
									</figure>
								</div>
								<div class="col-md-12 animate-box">
									<h2>Pointing has no control about the blind texts</h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large <a href="#">language</a> ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
								</div>
							</div> -->
							
							
						</div>
					</article>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12">
					<h2 class="related-title animate-box">Related Posts</h2>
				</div>
			</div> -->
			<!-- <div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-post-list">
						<li class="one-third animate-box entry" data-animate-effect="fadeIn">
							<a href="#">
								<div class="entry-img" style="background-image: url(images/img_3.jpg"></div>
								<div class="entry-desc">
									<h3>How Web Hosting Can Impact Page Load Speed</h3>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
							</a>
							<a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
						</li>
						<li class="one-third animate-box entry" data-animate-effect="fadeIn">
							<a href="#">
								<div class="entry-img" style="background-image: url(images/img_4.jpg"></div>
								<div class="entry-desc">
									<h3>How Web Hosting Can Impact Page Load Speed</h3>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
							</a>
							<a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
						</li>
						<li class="one-third animate-box entry" data-animate-effect="fadeIn">
							<a href="#">
								<div class="entry-img" style="background-image: url(images/img_5.jpg"></div>
								<div class="entry-desc">
									<h3>How Web Hosting Can Impact Page Load Speed</h3>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
							</a>
							<a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
						</li>
					</ul>	
				</div>
			</div> -->
		</div>
	</div>




	
	@endsection