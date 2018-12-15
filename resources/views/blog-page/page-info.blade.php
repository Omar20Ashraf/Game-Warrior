<!-- Page info section -->

@forelse($firsts as $first)
	<section class="page-info-section set-bg" data-setbg=
			 "{{url('images/blog/first',$first->image)}}">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>{{$first->title}}</h2>
						<p>{{$first->par}}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@empty
	<h3>No Data</h3>
@endforelse		
<!-- Page info section -->