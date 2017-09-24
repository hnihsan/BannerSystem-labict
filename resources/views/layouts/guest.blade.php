<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Styles -->
      <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="{{url('/images/wallpaper1.jpg')}}"> <!-- random image -->
          <div class="caption center-align">
            @yield('content')
          </div>
        </li>
      </ul>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
       $('.slider').slider({
         indicators :false,
         height : 800,
       });
     });
    </script>
    <footer class="page-footer black">
      <div class="footer-copyright">
        <div class="container">
        © 2017 Copyright LAB-ICT Universitas Budi Luhur Developer Team
        </div>
      </div>
    </footer>
  </body>
</html>
