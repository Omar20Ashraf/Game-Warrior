	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				@foreach(App\LatestNews::all() as $item)
				<div class="nt-item">
					<span class="{{$item->tag_color}}">{{$item->tag_name}}</span>
					{{$item->description}}
				 </div>
				 @endforeach
			</div>
		</div>
	</div>
	<!-- Latest news section end -->

	{{-- saved in login-register.blade --}}