<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"> <!-- Resource style -->
    <script src="{{ URL::asset('js/modernizr.js') }}"></script> <!-- Modernizr -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script> <!-- Resource jQuery -->
    <script src="{{ URL::asset('js/app.js') }}"></script>

    <title>Fitness</title>
</head>
<body>
<main id="cd-main-content2">
    <section>
        <div id="app">
            @yield('content')
        </div>
    </section> <!-- cd-intro -->

    <header class="cd-header2">
        <div id="cd-logo">Created by V's members</div>
        <a class="cd-menu-trigger" href="#main-nav">Menu<span></span></a>
        @guest
            <a class="cd-menu-one" href="{{ route('login') }}">Log in</a>
            <a class="cd-menu-two" href="{{ route('register') }}">Register</a>
            @else
                <a class="cd-menu-trigger-one" href="#main-nav-one">{{Auth::user()->name}}<span></span></a>
                @endguest
    </header>
    <div class="cd-blurred-bg"></div>
</main>


<nav id="main-nav">
    <ul>
        <li><a href="{{ route('home') }}"><span>Home</span></a></li>
        <li><a href="{{ route('course') }}"><span>Courses</span></a></li>
        <li><a href="{{ route('listTrainer') }}"><span>Trainers</span></a></li>
        <li><a href="{{ route('all-posts')}}"><span>Blog</span></a></li>
        <li><a href="#0"><span>About us</span></a></li>
    </ul>
    <a href="#0" class="cd-close-menu">Close<span></span></a>
</nav>
@if(Auth::user())
    <nav id="main-nav-one">
        <ul>
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span>Log out</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            <li><a href="{{ route("profile", auth()->user()->id) }}"><span>My profile</span></a></li>
            <li><a href="{{ route("ListRegistion", auth()->user()->id) }}"><span>My page</span></a></li>
            <li><a href="{{ url('/new-post') }}"><span>Add new post</span></a></li>
            <li><a href="{{ url('/user/'.Auth::id().'/posts') }}"><span>My posts</span></a></li>
        </ul>
        <a href="#0" class="cd-close-menu">Close<span></span></a>
    </nav>
@endif
</body>
</html>