<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <title>Fitness</title>
</head>
<body>
<div class="cd-header">
    <div id="cd-logo"></div>
    <a class="cd-menu-trigger" href="#main-nav" style="color: white">Menu<span></span></a>
    @guest
        <a class="cd-menu-one" href="{{ route('login') }}" style="color: white">Log in</a>
        <a class="cd-menu-two" href="{{ route('register') }}" style="color: white">Register</a>
        @else
            <a class="cd-menu-trigger-one" href="#main-nav-one" style="color: white">{{Auth::user()->name}}<span></span></a>
            @endguest
</div>
<main id="cd-main-content">
    <section id="cd-intro">
        <a1>You don't have to be</a1>
        <a2>great to start, but</a2>
        <a3>you have to start</a3>
        <a4>to be great!</a4>
    </section> <!-- cd-intro -->
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

</body>
</html>