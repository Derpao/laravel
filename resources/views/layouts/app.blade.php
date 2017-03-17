<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('jwplayer-7.9.3/jwplayer-7.9.3/skins/glow.css') }}" rel="stylesheet">


    <style>
        .table-ball-class td {
            text-transform: uppercase;
            text-shadow: none;
            font-size: 13px;
            font-family: "Antenna Black", Arial;
            color: #000;
            height: 16px;
            font-weight: 600;
        }

        .table-ball-class {
            table-layout: fixed;
        }

        .table-ball-class td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .playing-gif {
            height: 15px;
            width: 10%;
        }

    </style>
    @yield('css')
    <script src="{{ asset('js/jquery/jquery-1.11.3.min.js') }}"></script>
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    <script src="{{ asset('css/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-table-auto-row.js') }}"></script>
    <!-- Styles -->
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

    </script>
    @yield('js')

</head>
<body>
<div id="app">
    {{--/////--}}
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{--<a class="navbar-brand thai-font" href="#">บอลเด็ด</a>--}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="row footer-row">
                <a><img class="footer-icon" src="{{ asset('pic/icon-line.png') }}" alt=""></a>
                <span class="thai-font">ID:XXXX</span>
                <a><img class="footer-icon footerFace" src="{{ asset('pic/facebook.png') }}" alt=""></a>
                <span class="thai-font">Account:XXXX</span>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->

</body>
</html>
