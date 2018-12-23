	
	@forelse($recentreviews as $recentreview)
		<div class="col-lg-3 col-md-6">
			<div class="review-item">
				<div class="review-cover set-bg" data-setbg=
				"{{ url('images/recentreview',$recentreview->image) }}">
					<div class="score {{$recentreview->evalution_color}}">
						{{$recentreview->evalution}}
					</div>
				</div>
				<div class="review-text">
					<a href="index/recentreview/{{$recentreview->id}}">
						<h5>{{$recentreview->title}}</h5>
					</a>	
					<p>{{$recentreview->par}}</p>
				</div>
			</div>
		</div>
	@empty
		<h3>No Data</h3>
	@endforelse	