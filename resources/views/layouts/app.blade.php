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
  <!--Navigation  -->
  @include('layouts.partials.navbar');
  <!-- End Navigation-->

  <div class="container">
    @yield('content')
  </div>


    <!-- JavaScripts -->

    <script src="{{ url('js/vendor.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>
