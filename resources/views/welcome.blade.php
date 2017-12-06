@extends('layouts.app')
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Fitness</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    </style>
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
</div>
<div class="flex-center position-ref full-height">


    {{--<div class="content">--}}
    {{--<div class="title m-b-md">--}}
    {{--Fitness--}}
    {{--</div>--}}

    {{--<div class="links">--}}
    {{--<a href="{{ route('course') }}">Course</a>--}}
    {{--<a href="https://laracasts.com">Blog</a>--}}
    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="w3-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="w3-container">
                            <h2>Let make your every is a small progress!</h2>
                            <p>Better health with various fitness courses</p>
                        </div>


                        <div class="w3-content" style="max-width:800px">
                            <img class="mySlides" src="https://www.w3schools.com/w3css/img_nature_wide.jpg"
                                 style="width:100%">
                            <img class="mySlides" src="https://www.w3schools.com/w3css/img_fjords_wide.jpg"
                                 style="width:100%">
                            <img class="mySlides" src="https://www.w3schools.com/w3css/img_mountains_wide.jpg"
                                 style="width:100%">
                        </div>

                        <div class="w3-center">
                            <div class="w3-section">
                                <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                                <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
                            </div>
                            <button class="w3-button demo" onclick="currentDiv(1)">1</button>
                            <button class="w3-button demo" onclick="currentDiv(2)">2</button>
                            <button class="w3-button demo" onclick="currentDiv(3)">3</button>
                        </div>

                        <script>
                            var slideIndex = 1;
                            showDivs(slideIndex);

                            function plusDivs(n) {
                                showDivs(slideIndex += n);
                            }

                            function currentDiv(n) {
                                showDivs(slideIndex = n);
                            }

                            function showDivs(n) {
                                var i;
                                var x = document.getElementsByClassName("mySlides");
                                var dots = document.getElementsByClassName("demo");
                                if (n > x.length) {
                                    slideIndex = 1
                                }
                                if (n < 1) {
                                    slideIndex = x.length
                                }
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" w3-red", "");
                                }
                                x[slideIndex - 1].style.display = "block";
                                dots[slideIndex - 1].className += " w3-red";
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
