@extends('layouts.app')

@section('content')
<div class="col-md-6">
  <h2>Login</h2>
  <form role="form" method="POST" action="{{ url('/login') }}">
      {{ csrf_field() }}

      <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="control-label" for="email">E-Mail</label>
        <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-groupl {{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="control-label" for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" value="{{ old('password') }}">

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group">

          <div class="col-md-6 col-md-offset-4">
              <div class="checkbox">
                  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input type="checkbox" class="mdl-checkbox__input" name="remember"> Remember Me
                  </label>
              </div>
          </div>
      </div>

      <div class="form-group">

              <button type="submit" class="btn- btn-primary">
                  <i class="fa fa-btn fa-sign-in"></i> Login
              </button>

              <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>

      </div>
  </form>
</div>

@endsection
