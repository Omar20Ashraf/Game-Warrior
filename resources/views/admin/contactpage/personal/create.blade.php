@extends('admin.layout.admin')

@section('content')
	
<h3>Add Contact us Background Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>'personalinfo.store','method'=>'Post',
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
				{{ Form::label('address','Address') }}
				{{ Form::text('address',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('phone','Phone') }}
				{{ Form::text('phone',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('email','E-mail') }}
				{{ Form::text('email',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('facebook','Facebook Link') }}
				{{ Form::text('facebook',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('twitter','Twitter Link') }}
				{{ Form::text('twitter',null,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('linkedin','Linkedin Link') }}
				{{ Form::text('linkedin',null,array('class'=>'form-control')) }}
			</div>			

			<div class="form-group">
				{{ Form::label('github','Github Link') }}
				{{ Form::text('github',null,array('class'=>'form-control')) }}
			</div>

			{{ Form::submit('Create',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection