
@extends('layout.default')

@section('content')

	<!-- Page info section -->
	@include('blog-page.page-info')	

	<!-- Page info section -->

	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">

				<!-- game info section -->
					@include('blog-page.game-info')	
				<!-- game info section -->

				<!-- sidebar -->
					@include('blog-page.sidebar')
				<!-- sidebar -->		
			</div>
		</div>
	</section>
	<!-- Page section end -->

@endsection