@extends('admin.layout.admin')

@section('content')
	
<h3>Edit Tournaments Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>['tournament.update',$products->id],
						'method'=>'Post','files'=>true]) !!}		
			{{ Form::hidden('_method','PUT') }}

			<div class="form-group">
				{{ Form::label('title','Title') }}
				{{ Form::text('title',$products->title,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('beggins','Tournament Beggins') }}
				{{ Form::date('beggins',$products->beggins,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('ends','Tournament Ends') }}
				{{ Form::date('ends',$products->ends,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('participants','Participants') }}
				{{ Form::text('participants',$products->participants,array('class'=>'form-control')) }}
			</div>			

			<div class="form-group">
				{{ Form::label('author','Author') }}
				{{ Form::text('author',$products->author,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('prizes','Prizes') }}
				{{ Form::text('prizes',$products->prizes,array('class'=>'form-control')) }}
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