
<!-- Recent game section  -->
<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
	<div class="container">
		<div class="section-title">
			<div class="cata new">new</div>
			<h2>Recent Games</h2>
		</div>
		<div class="row">
			@forelse($recentgames as $recentgame)
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg=
							 "{{ url('images/recentgame',$recentgame->image) }}">

							<div class="cata {{$recentgame->image_button_class}}">
								{{$recentgame->image_button}}
							</div>
						</div>
						<div class="rgi-content">
							<a href="index/recentgame/{{$recentgame->id}}">
								<h5>{{$recentgame->title}}</h5>
							</a>

							<p>{{$recentgame->par}} </p>

							<p class="fi-comment">
								{{ $recentgame->recentGamecomment->count() }} Comment
							</p>
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
	</div>
</section>
<!-- Recent game section end -->