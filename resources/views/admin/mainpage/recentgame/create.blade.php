@extends('admin.layout.admin')

@section('content')
	
<h3>Add Feature Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>'recentgame.store','method'=>'Post',
						'files'=>true]) !!}		

			<div class="form-group">
				{{ Form::label('title','Title') }}
				{{ Form::text('title',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('par','Par') }}
				{{ Form::text('par',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('image','Image') }}
				{{ Form::file('image',['class'=>'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('image_button','Image_Button') }}
				{{ Form::text('image_button',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('image_button_class','Image-Button-Color') }}
				{{ Form::text('image_button_class',null,array('class'=>'form-control')) }}
			</div>


			{{ Form::submit('Create',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection