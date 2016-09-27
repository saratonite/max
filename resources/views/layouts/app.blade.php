<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Max</title>

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



    <!-- Styles -->
    <link rel="stylesheet" href="{{url('css/app.css')}}" >
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">


<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
       <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Max</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
             <a class="mdl-navigation__link" href="{{url('/')}}">Home</a>
             @if(!Auth::check())
             <a class="mdl-navigation__link" href="{{url('/login')}}">Login</a>
             <a class="mdl-navigation__link" href="{{url('/register')}}">Register</a>
             @else
             <a class="mdl-navigation__link" href="{{ route('contacts') }}">Contacts</a>
             <a class="mdl-navigation__link" href="{{url('/logout')}}">Logout</a>
             @endif
          </nav>
       </div>
    </header>
    <div class="mdl-layout__drawer">
       <span class="mdl-layout-title">Max App</span>
       <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="{{url('/')}}">Home</a>
          @if(!Auth::check())
          <a class="mdl-navigation__link" href="{{url('/login')}}">Login</a>
          <a class="mdl-navigation__link" href="{{url('/register')}}">Register</a>
          @else
          <a class="mdl-navigation__link" href="{{ route('contacts') }}">Contacts</a>
          <a class="mdl-navigation__link" href="{{url('/logout')}}">Logout</a>
          @endif
       </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col" >
          <div class="page-content">
              @yield('content')
          </div>
        </div>
     </div>
    </main>
 </div>




    <!-- JavaScripts -->

    <script src="{{ url('js/vendor.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>
