
<!-- Feature section -->
<section class="feature-section spad">
	<div class="container">
		<div class="row">
			@forelse($features as $feature)
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg=
						"{{ url('images/features',$feature->image) }}">
						<span class="cata {{$feature->button_color}}">
							{{$feature->button}}
						</span>
						<div class="fi-content text-white">
							<h5>
								<a href="/index/feature/{{$feature->id}}">
								{{$feature->title}}
								</a>
							</h5>
							<p>{{$feature->par}} </p>
							
							<p class="fi-comment">
								{{ $feature->featureComment->count() }} Comment
							</p>
						</div>
					</div>
				</div>
			@empty
				<h3>No Data</h3>
			@endforelse
		</div>
	</div>
</section>
	<!-- Feature section end -->