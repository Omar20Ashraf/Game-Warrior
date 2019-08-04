<style>
    .panel-body{margin-left: 350px;margin-top: 200px;}
</style>
@extends('user.layout')

@section('content')

<div class="panel-body">
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Name">

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

	        @if ($errors->has('email'))
	            <span class="help-block">
	                <strong>{{ $errors->first('email') }}</strong>
	            </span>
	        @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" placeholder="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
        </div>

		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>

        <div class="text-center">
        	Already have an account? 
        	<a href="{{route('login')}}">Sign in</a>
        </div>
    </form>
</div>

@endsection