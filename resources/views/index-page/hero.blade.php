
<!-- Hero section -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		@forelse($products as $product)
			<div class="hs-item set-bg" data-setbg=
				 "{{ url('images/heroes',$product->image) }}">
				<div class="hs-text">
					<div class="container">
						<h2>{{$product->title}}</h2>
						<p>{{ $product->par }}</p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
			</div>

		@empty
			<h3>No Data</h3>
		@endforelse		

	</div>
</section>
<!-- Hero section end -->

	{{-- <h2>The Best <span>Games</span> Out There</h2> --}}