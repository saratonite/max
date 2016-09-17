@extends('layouts.app')

@section('content')
<div class="mdl-cell mdl-cell--3-col">
  <h2>Login</h2>
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
      {{ csrf_field() }}

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('email') ? ' has-error' : '' }}">
        <input class="mdl-textfield__input" type="email" name="email" id="email" value="{{ old('email') }}">
        <label class="mdl-textfield__label" for="email">E-Mail</label>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('password') ? ' has-error' : '' }}">
        <input class="mdl-textfield__input" type="password" name="password" id="password" value="{{ old('password') }}">
        <label class="mdl-textfield__label" for="password">Password</label>
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
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                  <i class="fa fa-btn fa-sign-in"></i> Login
              </button>

              <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
          </div>
      </div>
  </form>
</div>

@endsection
