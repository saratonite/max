@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-5 col-md-offset-3">

      <h3 class="pull-left">Register</h3>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
          {{ csrf_field() }}

          <div class="form-group">

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('email') ? ' has-error' : '' }}">
              <input class="mdl-textfield__input" type="text" id="name" name="name" value="{{ old('name') }}">
              <label class="mdl-textfield__label" for="name">Name</label>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>

          </div>
          <div class="form-group">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('email') ? ' has-error' : '' }}">
              <input class="mdl-textfield__input" type="email" name="email" id="email" value="{{ old('email') }}">
              <label class="mdl-textfield__label" for="email">E-Mail</label>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('password') ? ' has-error' : '' }}">
              <input class="mdl-textfield__input" type="password" name="password" id="password" value="{{ old('password') }}">
              <label class="mdl-textfield__label" for="password">Password</label>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <input class="mdl-textfield__input" type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
              <label class="mdl-textfield__label" for="password_confirmation">Confirm Password</label>
              @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-2 col-md-offset-3">
              <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                  <i class="fa fa-btn fa-user"></i> Register
              </button>
            </div>
          </div>

      </form>
    </div>
  </div>





@endsection
