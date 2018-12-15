	
<!-- Latest news section -->
<div class="latest-news-section">
	<div class="ln-title">Latest News</div>
	<div class="news-ticker">
		<div class="news-ticker-contant">
			@forelse($latests as $latest)
				<div class="nt-item">
					<span class="{{$latest->tag_color}}">
						{{$latest->tag_name}}
					</span>
					{{$latest->description}} 
				</div>

			@empty
				<h3>No Data</h3>
			@endforelse
		</div>
	</div>
</div>
<!-- Latest news section end -->