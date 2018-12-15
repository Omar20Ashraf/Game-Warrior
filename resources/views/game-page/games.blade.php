
<!-- Page section -->
<section class="page-section review-page spad">
	<div class="container">
		<div class="row">
			@forelse($games as $game)
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg=
						"{{url('images/game/games',$game->image)}}">
							<div class="score yellow">{{$game->review}}</div>
						</div>
						<div class="review-text">
							<h4>{{$game->name}}</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>{{ $game->par }}</p>
						</div>
					</div>
				</div>
			@empty
				<h3>No Data</h3>
			@endforelse		
			</div>
			<div class="text-center pt-4">
				<button class="site-btn btn-sm">Load More</button>
			</div>
		</div>
</section>
<!-- Page section end -->