@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My page</div>
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
                    </style>
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
                                        <form action="{{route('listcourse')}}" method="post">
                                            {{csrf_field()}}
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control" type="hidden" value="{{csrf_token()}}">
                                                    <label>My Ages</label>
                                                    <input class="form-control" name="ages"
                                                           placeholder="Please Enter Your Ages" type="number">
                                                    <label>My Weight </label>
                                                    <input class="form-control" name="weight"
                                                           placeholder="Please Enter Your Weight" type="number">
                                                    <label>My Height </label>
                                                    <input class="form-control" name="height"
                                                           placeholder="Please Enter Your Height" type="number">

                                                </div>
                                                <button type="submit">Submit</button>
                                            </fieldset>
                                        </form>
                                        <div class="w3-container">
                                            <h2>Let make your every is a small progress!</h2>
                                            <p>Better health with various fitness courses</p>
                                        </div>


                                        <div class="w3-content" style="max-width:800px">
                                            <img class="mySlides"
                                                 src="https://www.w3schools.com/w3css/img_nature_wide.jpg"
                                                 style="width:100%">
                                            <img class="mySlides"
                                                 src="https://www.w3schools.com/w3css/img_fjords_wide.jpg"
                                                 style="width:100%">
                                            <img class="mySlides"
                                                 src="https://www.w3schools.com/w3css/img_mountains_wide.jpg"
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
