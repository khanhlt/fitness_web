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
<main id="cd-main-content">
    <section id="cd-intro">
        <h1></h1>

        <header class="cd-header">
            <div id="cd-logo">Created by V's members</div>
            <a class="cd-menu-trigger" href="#main-nav">Menu<span></span></a>
            @guest
                <a class="cd-menu-trigger-one" href="{{ route('login') }}">Login</a>
                @else
                    <a class="cd-menu-trigger-one" href="#main-nav">{{Auth::user()->name}}<span></span></a>
                    @endguest
        </header>
        <div class="cd-blurred-bg"></div>
    </section> <!-- cd-intro -->
</main>

<div class="cd-shadow-layer"></div>

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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>