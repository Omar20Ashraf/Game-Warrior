@extends('admin.layout.admin')

@section('content')
	
<h3>Edit Latest News Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>['latestnews.update',$latestnews->id],'method'=>'Post','files'=>true]) !!}

		{{ Form::hidden('_method','PUT') }}

			<div class="form-group">
				{{ Form::label('description','Description') }}
				{{ Form::text('description',$latestnews->description,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('tag_name','Tag Name') }}
				{{ Form::text('tag_name',$latestnews->tag_name,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('tag_color','Tag Color') }}

				<select class="form-control" name="tag_color" required>

				    <option value="">Choose One</option>

				       <option value="new" {{($latestnews->tag_color == 'new') ? 'selected' : ''}}>new</option>
				       <option value="strategy" {{($latestnews->tag_color == 'strategy') ? 'selected' : ''}}>strategy</option>
				       <option value="racing" {{($latestnews->tag_color == 'racing') ? 'selected' : ''}}>racing</option>
				</select>
			</div>

			{{ Form::submit('Update',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection