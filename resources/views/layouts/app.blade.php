<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fitness') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="topnav">
    <a href="{{ route('home') }}">Home</a>
    <a href="#news">Courses</a>
    <a href="#contact">Trainers</a>
    <a href="#contact">Blog</a>
    <a href="#about">About</a>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"
                           aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
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

                                <a href="{{ route("profile", auth()->user()->id)}}"
                                   onclick=";">
                                    My profile
                                </a>
                                        <a href="{{ route("profile", auth()->user()->id)}}"
                                            onclick=";">
                                            My profile
                                        </a>

                                        <a href="{{ route("ListRegistion", auth()->user()->id)}}"
                                           onclick=";">
                                            My Page
                                        </a>

                                        <a href="{{ route("listTrainer", auth()->user()->id)}}"
                                           onclick=";">
                                            Trainer
                                        </a>

                                    </li>
                                </ul>
                            <li>
                                <a href="{{ url('/new-post') }}">Add new post</a>
                            </li>

                            <li>
                                <a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
                            </li>
                            </li>
                        </ul>
                    </li>
                    @endguest
        </ul>
    </div>
    {{--@if (Route::has('login'))--}}
    {{--<div class="top-right links">--}}
    {{--@auth--}}
    {{--<a href="{{ url('/home') }}">Home</a>--}}
    {{--@else--}}
    {{--<a href="{{ route('login') }}">Login</a>--}}
    {{--<a href="{{ route('register') }}">Register</a>--}}
    {{--@endauth--}}
    {{--</div>--}}
    {{--@endif--}}
</div>
<div id="app">
    {{--<nav class="navbar navbar-default navbar-static-top">--}}
    {{--<div class="container">--}}
    {{--<div class="navbar-header">--}}

    {{--<!-- Collapsed Hamburger -->--}}
    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"--}}
    {{--data-target="#app-navbar-collapse" aria-expanded="false">--}}
    {{--<span class="sr-only">Toggle Navigation</span>--}}
    {{--<span class="icon-bar"></span>--}}
    {{--<span class="icon-bar"></span>--}}
    {{--<span class="icon-bar"></span>--}}
    {{--</button>--}}

    {{--<!-- Branding Image -->--}}
    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
    {{--{{ config('app.name', 'Laravel') }}--}}
    {{--</a>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</nav>--}}

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
<footer class="footer">
    <p>Created by: V's members. Copyright 2017</p>
    <p>Contact information: <a href="V.com">
            V.com</a>.</p>
</footer>
</html>
