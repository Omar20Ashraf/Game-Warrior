@extends('user.layout')

@section('content')
<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
  <div class="card card-signin my-5">
    <div class="card-body">
      <h5 class="card-title text-center">Sign In</h5>
        <form class="form-signin" method="POST" action="{{ route('login') }} ">
            {{ csrf_field() }}

        <div class="form-label-group {{ $errors->has('email') ? ' has-error' : '' }}">

          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>
          <label for="inputEmail">Email address</label>

          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>

        <div class="form-label-group{{ $errors->has('password') ? ' has-error' : '' }}">

          <label for="inputPassword">Password</label>

          <input id="inputPassword" type="password" class="form-control" name="password" placeholder="Password" required>

          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>

        <div class="custom-control custom-checkbox mb-3">

          <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" {{ old('remember') ? 'checked' : '' }}>

          <label class="custom-control-label" for="customCheck1">Remember Me</label>
    
        </div>
        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>

        <a class="btn btn-link" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a> 
      </form>
    </div>
  </div>
</div>


@endsection
