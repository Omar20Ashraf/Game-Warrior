@extends('admin.layout.admin')

@section('content')
	
<h3>Add Contact us Background Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>'contactbackground.store','method'=>'Post',
						'files'=>true]) !!}

			<div class="form-group">
				{{ Form::label('name','Name') }}
				{{ Form::text('name',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('description','Description') }}
				{{ Form::text('description',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('image','Image') }}
				{{ Form::file('image',['class'=>'form-control']) }}
			</div>

			{{ Form::submit('Create',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection