<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Brokers POC</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-laravel fixed-top">
            <!-- <div class="container-fluid"> -->
                @guest
                @else
                    <a class="navbar-brand blue-nav-item" href="{{ url('/home') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="/images/logo_nav.png">
                    HOME
                    </a>
                    <!-- <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/form') }}">Annual Statement</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/ip2_1') }}">Quarterly Monitoring</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">Certificate Issuance</a>
    </li>
  </ul> -->
                    
                @endguest


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link blue-nav-item" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> {{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link blue-nav-item" href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>{{ __('Sign Up') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle blue-nav-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right navbarDropdownRight" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile_url') }}">Company Profile</a>
                                    <hr>
                                    <a class="dropdown-item" href="">Submission History</a>
                                    <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            <!-- </div> -->
        </nav>

        <main class="py-4">
            @guest
                @yield('content')
            @else
                @include('users.dashboard')
                @yield('content')
            @endguest
            
        </main>
    </div>
</body>
</html>
