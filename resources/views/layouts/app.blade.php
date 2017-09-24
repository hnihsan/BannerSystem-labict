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
    <div id="app">
        <nav class="purple accent-1">
          <div class="nav-wrapper container">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <!-- Dropdown Trigger -->
                <a class='dropdown-button' href='#' data-activates='dropdown1'>{{ Auth::user()->name }}</a>
                  <!-- Dropdown Structure -->
                      <ul id='dropdown1' class='dropdown-content'>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                      </ul>
                @endguest
              </ul>
          </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
</body>
</html>
