
@extends('layout.default')
@section('content')

	<!-- Page info section -->
	@forelse($items as $item)
		<section class="page-info-section set-bg" 
				 data-setbg="{{url('images/contact/background',$item->image)}}">
			<div class="pi-content">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 text-white">
							<h2>{{ $item->name }}</h2>
							<p>{{ $item->description }}</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	@empty
		<h3>No Data</h3>
	@endforelse	
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section spad contact-page">
		<div class="container">
			
			<div class="row">
				@forelse($personals as $personal)
					<div class="col-lg-4 mb-5 mb-lg-0">
						<h4 class="comment-title">{{ $personal->name }}</h4>
						<p>{{ $personal->description }}</p>
						<div class="row">
							<div class="col-md-9">
								<ul class="contact-info-list">
									<li><div class="cf-left">Address</div><div class="cf-right">{{ $personal->address }}</div></li>
									<li><div class="cf-left">Phone</div><div class="cf-right">{{ $personal->phone }}</div></li>
									<li><div class="cf-left">E-mail</div><div class="cf-right">{{ $personal->email }}</div></li>
								</ul>
							</div>
						</div>
						<div class="social-links">
							<a href="{{ $personal->facebook }}" target='_blank'>
								<i class="fa fa-facebook"></i>
							</a>
							<a href="{{ $personal->twitter }}">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="{{ $personal->github }}" target='_blank'>
								<i class="fa fa-github"></i>
							</a>
							<a href="{{ $personal->linkedin }}">
								<i class="fa fa-linkedin"></i>
							</a>
						</div>
					</div>
				@empty
					<h3>No Data</h3>
				@endforelse	
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Leave a Reply</h4>
						{!! Form::open(['route'=>'dosend',
										'method'=>'Post','class'=>'comment-form',
										'files'=>true]) !!}
							<div class="row">
								<div class="form-group col-md-6">
									{{ Form::text('name',null,array('class'=>'form-control','placeholder'=>'Name')) }}
								</div>

								<div class="form-group col-md-6">
									{{ Form::email('email',null,array('class'=>'form-control','placeholder'=>'E-mail')) }}
								</div>

								<div class="form-group col-lg-12">
									{{ Form::text('subject',null,array('class'=>'form-control','placeholder'=>'Subject')) }}

									{{ Form::textarea('body',null,array('class'=>'form-control','placeholder'=>'Message')) }}							

									{{ Form::submit('Send',array('class'=>'site-btn btn-sm')) }}									
								</div>	

							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->

@endsection

{{-- 						<form class="comment-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Name">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="Email">
								</div> --}}
{{-- 								<div class="col-lg-12">
									<input type="text" placeholder="Subject">
									<textarea placeholder="Message"></textarea>
									<button class="site-btn btn-sm">Send</button>
								</div>
							</div>
						</form> --}}