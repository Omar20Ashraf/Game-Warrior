@extends('admin.layout.admin')

@section('content')
	
<h3>Edit Recent Review Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>['recentreview.update',$products->id],'method'=>'Post','files'=>true]) !!}
		{{ Form::hidden('_method','PUT') }}

			<div class="form-group">
				{{ Form::label('title','Title') }}
				{{ Form::text('title',$products->title,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('par','Par') }}
				{{ Form::text('par',$products->par,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('evalution','Evalution') }}
				{{ Form::text('evalution',$products->evalution,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('evalution_color','Evalution Color') }}
				{{ Form::text('evalution_color',$products->evalution_color,array('class'=>'form-control')) }}
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