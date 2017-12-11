{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">--}}

    {{--<title>Fitness</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

    {{--<!-- Styles -->--}}
    {{--<style>--}}
        {{--body {--}}
            {{--margin: 0;--}}
        {{--}--}}

        {{--.topnav {--}}
            {{--overflow: hidden;--}}
            {{--background-color: #c1e2de;--}}
        {{--}--}}

        {{--.topnav a {--}}
            {{--float: left;--}}
            {{--color: #984513;--}}
            {{--text-align: center;--}}
            {{--padding: 14px 16px;--}}
            {{--text-decoration: none;--}}
            {{--font-size: 17px;--}}
            {{--font-weight: bold;--}}
        {{--}--}}

        {{--.topnav a:hover {--}}
            {{--background-color: #ddd;--}}
            {{--color: #000000;--}}
        {{--}--}}

        {{--.mySlides {--}}
            {{--display: none--}}
        {{--}--}}

        {{--.w3-left, .w3-right, .w3-badge {--}}
            {{--cursor: pointer--}}
        {{--}--}}

        {{--.w3-badge {--}}
            {{--height: 13px;--}}
            {{--width: 13px;--}}
            {{--padding: 0--}}
        {{--}--}}

        {{--html, body {--}}
            {{--background-color: #fff;--}}
            {{--color: #636b6f;--}}
            {{--font-family: 'Raleway', sans-serif;--}}
            {{--font-weight: 100;--}}
            {{--height: 100vh;--}}
            {{--margin: 0;--}}
        {{--}--}}

        {{--.full-height {--}}
            {{--height: 100vh;--}}
        {{--}--}}

        {{--.flex-center {--}}
            {{--align-items: center;--}}
            {{--display: flex;--}}
            {{--justify-content: center;--}}
        {{--}--}}

        {{--.position-ref {--}}
            {{--position: relative;--}}
        {{--}--}}

        {{--.top-right {--}}
            {{--position: absolute;--}}
            {{--right: 10px;--}}
            {{--top: 18px;--}}
        {{--}--}}

        {{--.content {--}}
            {{--text-align: center;--}}
        {{--}--}}

        {{--.title {--}}
            {{--font-size: 84px;--}}
        {{--}--}}

        {{--.links > a {--}}
            {{--color: #636b6f;--}}
            {{--padding: 0 25px;--}}
            {{--font-size: 12px;--}}
            {{--font-weight: 600;--}}
            {{--letter-spacing: .1rem;--}}
            {{--text-decoration: none;--}}
            {{--text-transform: uppercase;--}}
        {{--}--}}

        {{--.m-b-md {--}}
            {{--margin-bottom: 30px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="topnav">--}}
    {{--<a href="#home">Home</a>--}}
    {{--<a href="#news">Courses</a>--}}
    {{--<a href="#contact">Trainers</a>--}}
    {{--<a href="#contact">Blog</a>--}}
    {{--<a href="#about">About</a>--}}
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
{{--</div>--}}

{{--<div class="flex-center position-ref full-height">--}}


    {{--<div class="w3-container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    .mySlides {
        display: none
    }

    .w3-left, .w3-right, .w3-badge {
        cursor: pointer
    }

    .w3-badge {
        height: 13px;
        width: 13px;
        padding: 0
    }

    .w3-content {
        margin-top: 40px;
    }

</style>

@extends('layouts.app')
@section('content')


    <div class="w3-content" style="">
        <img width="800px" height="400px" class="mySlides" src="http://static1.squarespace.com/static/5952024ff5e2317781eda4ff/595ca3cd4c8b036c0f147819/5988384ca803bb82a16cef7e/1502110305136/Untitled+design+%281%29.png?format=1000w"
             style="width:100%">
        <img width="800px" height="400px" class="mySlides" src="https://trustedbeasts.com/wp-content/uploads/2017/10/alexander-redl-185764-800x400.jpg"
             style="width:100%">
        <img width="800px" height="400px" class="mySlides" src="https://wwws.fitnessrepublic.com/wp-content/uploads/2015/06/medicine-ball-workout.jpg?x26945"
             style="width:100%">
    </div>

    <div class="w3-center">
        <div class="w3-section">
            <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev
            </button>
            <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯
            </button>
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
@endsection
                {{----}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
