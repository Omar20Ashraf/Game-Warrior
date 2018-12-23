@extends('admin.layout.admin')

@section('content')
	
<h3>Add Recent Review Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>'recentreview.store','method'=>'Post','files'=>true]) !!}

			<div class="form-group">
				{{ Form::label('title','Title') }}
				{{ Form::text('title',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('par','Par') }}
				{{ Form::text('par',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('evalution','Evalution') }}
				{{ Form::text('evalution',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('evalution_color','Evalution Color') }}
				{{ Form::text('evalution_color',null,array('class'=>'form-control')) }}
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