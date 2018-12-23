@extends('admin.layout.admin')

@section('content')
	
<h3>Edit Blog Sidebar Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>['blogsidebar.update',$products->id],
						'method'=>'Post','files'=>true]) !!}
		{{ Form::hidden('_method','PUT') }}

			<div class="form-group">
				{{ Form::label('name','Name') }}
				{{ Form::text('name',$products->name,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('par','Par') }}
				{{ Form::text('par',$products->par,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('button','Button') }}
				{{ Form::text('button',$products->button,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('button_color','Button-Color') }}
				{{ Form::text('button_color',$products->button_color,
							   array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('image','Image') }}
				{{ Form::file('image',['class'=>'form-control']) }}
			</div>

			{{ Form::submit('Update',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection