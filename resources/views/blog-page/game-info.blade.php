			
<!-- Page info section -->

	<div class="col-lg-8">
		<div class="row">
			@forelse($games as $game)
				<div class="col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg=
								"{{url('images/blog/games',$game->image)}}">
							<div class="cata {{$game->button_color}}">
								{{$game->button}}
							</div>
						</div>
						<div class="rgi-content">
							<h5>{{$game->name}}</h5>
							<p>{{$game->par}}</p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
			@empty
				<h3>No Data</h3>
			@endforelse
		</div>

		<div class="site-pagination">
			<span class="active">01.</span>
			<a href="#">02.</a>
			<a href="#">03.</a>
		</div>
	</div>