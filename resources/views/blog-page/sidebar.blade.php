	<!-- sidebar -->
	<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">
		<!-- widget -->
		<div class="widget-item">
			<form class="search-widget">
				<input type="text" placeholder="Search">
				<button><i class="fa fa-search"></i></button>
			</form>
		</div>
					<!-- widget -->
		<div class="widget-item">
						<h4 class="widget-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" 
									 data-setbg="{{ url('img/latest-blog/1.jpg') }}"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="{{ url('img/latest-blog/2.jpg') }}"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="{{ url('img/latest-blog/3.jpg') }}"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
		</div>
		<!-- widget -->
		<div class="widget-item">
						<h4 class="widget-title">Top Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="{{ url('img/authors/1.jpg') }}"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span> Lorem consec ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="{{ url('img/authors/2.jpg') }}"></div>
								<div class="tc-content">
									<p><a href="#">Michael James</a> <span>on</span>Cras sit amet sapien aliquam</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">								
								<div class="tc-thumb set-bg" data-setbg="{{ url('img/authors/3.jpg') }}"></div>
								<div class="tc-content">
									<p><a href="#">Justin More</a> <span>on</span> Lorem ipsum dolor consecsit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
						</div>
		</div>
		<!-- widget -->
		@forelse($items as $item)
			<div class="widget-item">
				<div class="feature-item set-bg" 
					 data-setbg="{{url('images/blog/sidebar',$item->image)}}">
					<span class="cata {{$item->button_color}}">
						{{$item->button}}
					</span>
					<div class="fi-content text-white">
						<h5><a href="#">{{$item->name}}</a></h5>
						<p>{{$item->par}}</p>
						<a href="#" class="fi-comment">3 Comments</a>
					</div>
				</div>
			</div>
		@empty
			<h3>No Data</h3>
		@endforelse	
	</div>

									<!-- widget -->
{{-- 					<div class="widget-item">
						<div class="review-item">
							<div class="review-cover set-bg" data-setbg="img/review/1.jpg">
								<div class="score yellow">9.3</div>
							</div>
							<div class="review-text">
								<h5>Assasin’’s Creed</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
							</div>
						</div>
					</div> --}}