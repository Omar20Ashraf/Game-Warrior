	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				{{-- latestNews var came from AppServidePorvider --}}
				@foreach($latestNews as $latestNew)
					<div class="nt-item">
						<span class="{{$latestNew->tag_color}}">{{$latestNew->tag_name}}</span>
							{{$latestNew->description}}
					 </div>
				 @endforeach
				
			</div>
		</div>
	</div>
	<!-- Latest news section end -->

	{{-- saved in login-register.blade --}}