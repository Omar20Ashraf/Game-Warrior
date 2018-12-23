@extends('admin.layout.admin')

@section('content')
	
<h3>Edit Contact us Background Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>['personalinfo.update',$products->id],
						'method'=>'Post','files'=>true]) !!}
		{{ Form::hidden('_method','PUT') }}

			<div class="form-group">
				{{ Form::label('name','Name') }}
				{{ Form::text('name',$products->name,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('description','Description') }}
				{{ Form::text('description',$products->description,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('address','Address') }}
				{{ Form::text('address',$products->address,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('phone','Phone') }}
				{{ Form::text('phone',$products->phone,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('email','E-mail') }}
				{{ Form::text('email',$products->email,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('facebook','Facebook Link') }}
				{{ Form::text('facebook',$products->facebook,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('twitter','Twitter Link') }}
				{{ Form::text('twitter',$products->twitter,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('linkedin','Linkedin Link') }}
				{{ Form::text('linkedin',$products->linkedin,array('class'=>'form-control')) }}
			</div>			

			<div class="form-group">
				{{ Form::label('github','Github Link') }}
				{{ Form::text('github',$products->github,array('class'=>'form-control')) }}
			</div>

			{{ Form::submit('Create',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}

	</div>
</div>
@endsection