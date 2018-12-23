@extends('admin.layout.admin')

@section('content')
	
<h3>Edit Latest News Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>['latestnews.update',$products->id],'method'=>'Post','files'=>true]) !!}
		{{ Form::hidden('_method','PUT') }}

			<div class="form-group">
				{{ Form::label('description','Description') }}
				{{ Form::text('description',$products->description,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('tag_name','Tag Name') }}
				{{ Form::text('tag_name',$products->tag_name,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('tag_color','Tag Color') }}
				{{ Form::text('tag_color',$products->tag_color,array('class'=>'form-control')) }}
			</div>

			{{ Form::submit('Update',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection