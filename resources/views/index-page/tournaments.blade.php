
<!-- Tournaments section -->
<section class="tournaments-section spad">
	<div class="container">
		<div class="tournament-title">Tournaments</div>
		<div class="row">
			@forelse($tournaments as $tournament)
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" 
									data-setbg=
								"{{ url('images/tournaments',$tournament->image) }}">
							</div>
							<div class="ti-text">
								<h4>{{$tournament->title}}</h4>
								<ul>
									<li><span>Tournament Beggins:</span> 
										{{$tournament->beggins}}
									</li>
									<li><span>Tounament Ends:</span>
									 	{{$tournament->ends}}
									</li>
									<li><span>Participants:</span>
										{{$tournament->participants}}
									</li>
									<li><span>Tournament Author:</span>
										 {{$tournament->author}}
									</li>
								</ul>
								<p><span>Prizes:</span>
								 	{{$tournament->prizes}}
								</p>
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
<!-- Tournaments section bg -->