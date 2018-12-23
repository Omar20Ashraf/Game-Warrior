@extends('layout.default')
@section('content')

	<!-- Hero section -->
	@include('index-page.hero')	
	<!-- Hero section end -->

	<!-- Feature section -->
	@include('index-page.feature')
	<!-- Feature section end -->

	<!-- Recent game section  -->
	@include('index-page.recent-game')
	<!-- Recent game section end -->

	<!-- Tournaments section -->
	@include('index-page.tournaments')
	<!-- Tournaments section bg -->

	<!-- Review section -->
	@include('index-page.recent-reviews')
	<!-- Review section end -->


@endsection   
