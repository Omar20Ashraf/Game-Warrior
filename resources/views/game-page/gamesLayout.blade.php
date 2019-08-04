@extends('layout.default')

@section('content')
	
	<!-- Page info section -->
	<section class="page-info-section set-bg" 
			 data-setbg="{{ url('img/page-top-bg/2.jpg') }}">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>{{$games->title}}</h2>
						<p>{{$games->par}}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section single-blog-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-thumb set-bg" 
						 data-setbg="{{ url('images/game/games',$games->image) }}">
						<div class="score yellow">
							{{$games->review}}
						</div>
						<div class="rgi-extra">
							<div class="rgi-star">
								<img src="{{ url('img/icons/star.png') }}" alt="">
							</div>
							<div class="rgi-heart">
								<img src="{{ url('img/icons/heart.png') }}" alt="">
							</div>
						</div>
					</div>
					<div class="blog-content">
						<h3>{{$games->name}}</h3>
						<p href="" class="meta-comment">
							{{ $games->gamecomment->count() }} 
							comment
						</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pellentesque id nibh ac congue. Nullam dignissim egestas velit eget tempor. Morbi nec dolor neque. Maecenas quis tincidunt turpis. Cras ultricies pulvinar odio, sit amet lobortis lorem consectetur at. Vivamus risus erat, eleifend a nunc non, lacinia ultrices ante. Suspendisse a lacus at metus convallis maximus. Vivamus fringilla ipsum dolor. Cras pellentesque turpis id lacus condimentum condimentum. Sed tincidunt velit et urna eleifend imperdiet. Quisque euismod nibh at urna pellentesque, sit amet bibendum nibh fringilla. Sed dignissim varius blandit.</p>
						<p>Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. Aenean lectus felis, rutrum non quam eu, accumsan semper ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut accumsan, mauris nec venenatis gravida, lacus est gravida augue, eu egestas lorem nisi nec nibh. Mauris luctus porttitor elit, ac efficitur nulla consectetur a. Pellentesque scelerisque pulvinar magna sit amet auctor. Fusce tincidunt convallis elit ante, nec ullamcorper ante rhoncus mollis. </p>
					</div>
					<div class="comment-warp">
						<h4 class="comment-title">Top Coments</h4>
						<ul class="comment-list">
							@foreach($games->gamecomment as $comment)
								<li>
									<div class="comment">
										<div class="comment-avator set-bg" data-setbg="{{ url('img/authors/1.jpg') }}"></div>
										<div class="comment-content">
											<h5>{{ $comment->user->name }}  
												<span>
												{{$comment->created_at->diffForHumans()}}
												</span>
											</h5>
											<p>{{$comment->body}} </p>
											<a href="" class="reply">Reply</a>
										</div>
									</div>
								</li>
							@endforeach
						</ul>
					</div>
					<div class="comment-form-warp">
						<h4 class="comment-title">Leave Your Comment</h4>
						<form action="{{$games->id}}/comments" method="POST" class="comment-form">
							{{ csrf_field() }}

							<div class="form-group">	
								{{ Form::textarea('body','',
									['placeholder'=>'Your Comment Here','class'=>'form-control']) }}
							</div>		

							<div class="form-group pull-right">
								{{ Form::submit('Add Comment',['class'=>'site-btn btn-sm']) }}
							</div>

							@include('elements.flash')		
						</form>	
					</div>
				</div>
				<!-- sidebar -->
					@include('blog-page.sidebar')
				<!-- sidebar -->
			</div>
		</div>
	</section>
	<!-- Page section end -->

@endsection	