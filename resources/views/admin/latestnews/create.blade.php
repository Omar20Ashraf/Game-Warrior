@extends('admin.layout.admin')

@section('content')
	
<h3>Add Latest News Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>'latestnews.store','method'=>'Post','files'=>true]) !!}

			<div class="form-group">
				{{ Form::label('description','Description') }}
				{{ Form::text('description',null,array('class'=>'form-control','required'=>'required')) }}
			</div>

			<div class="form-group">
				{{ Form::label('tag_name','Tag Name') }}
				{{ Form::text('tag_name',null,array('class'=>'form-control','required'=>'required')) }}
			</div>

			<div class="form-group">
				{{ Form::label('tag_color','Tag Color') }}
				<select class="form-control" name="tag_color" required>

				    <option value="">Choose One</option>

				       <option value="new" {{(old('tag_color') == 'new') ? 'selected' : ''}}>new</option>
				       <option value="strategy" {{(old('tag_color') == 'strategy') ? 'selected' : ''}}>strategy</option>
				       <option value="racing" {{(old('tag_color') == 'racing') ? 'selected' : ''}}>racing</option>
				</select>

			</div>

			{{ Form::submit('Create',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection