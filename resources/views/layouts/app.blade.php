<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

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
    </header>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>