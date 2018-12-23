@extends('admin.layout.admin')

@section('content')
	
<h3>Add Feature Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>'tournament.store','method'=>'Post',
						'files'=>true]) !!}		

			<div class="form-group">
				{{ Form::label('title','Title') }}
				{{ Form::text('title',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('beggins','Tournament Beggins') }}
				{{ Form::date('beggins',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('ends','Tournament Ends') }}
				{{ Form::date('ends',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('participants','Participants') }}
				{{ Form::text('participants',null,array('class'=>'form-control')) }}
			</div>			

			<div class="form-group">
				{{ Form::label('author','Author') }}
				{{ Form::text('author',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('prizes','Prizes') }}
				{{ Form::text('prizes',null,array('class'=>'form-control')) }}
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