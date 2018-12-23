
@extends('layout.default')

@section('content')

	<!-- info section -->
	@include('game-page.first')	
	<!-- info section end -->

	<!-- page[games] section -->
	@include('game-page.games')	
	<!-- page[games] section end -->

	<!-- review section -->
	@include('game-page.review')	
	<!-- review section end -->


@endsection