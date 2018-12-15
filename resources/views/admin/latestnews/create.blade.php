@extends('admin.layout.admin')

@section('content')
	
<h3>Add Latest News Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>'latestnews.store','method'=>'Post','files'=>true]) !!}

			<div class="form-group">
				{{ Form::label('description','Description') }}
				{{ Form::text('description',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('tag_name','Tag Name') }}
				{{ Form::text('tag_name',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('tag_color','Tag Color') }}
				{{ Form::text('tag_color',null,array('class'=>'form-control')) }}
			</div>

			{{ Form::submit('Create',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection