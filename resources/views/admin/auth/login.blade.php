@extends('user.layout')

@section('content')

    <form method="POST" action="{{ route('admin.login') }} ">
        {{ csrf_field() }}
        <h2>Login</h2>
        <p class="hint-text">Create your account. It's free and only takes a minute.</p>

        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required >

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">
                 Sign in
            </button>
            <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                Forgot Your Password?
            </a>    
        </div>
    </form>

@endsection
