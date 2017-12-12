{{-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Course</title>
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
    .title {
        font-size: 84px;
        text-align: center;
        font-family: 'Raleway', sans-serif;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
  </style>
</head>
<body> --}}

{{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">--}}
{{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
{{--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--}}
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <style>
        .classes_wrapper {
            padding:4% 0;
        }
        .class_left{
            width:40%;
            float:left;
        }
        .class_right{
            width:60%;
            float: left;
            padding: 2%;
        }
    </style>
</head>

@extends('layouts.app')
@section('content')

    <div id="content">
        @yield('content')

        @if($courses != '')
            @foreach ($courses as $course)
                <div class="container">
                    <div class="classes_wrapper" style="padding: 4% 0">
                        <div class="row class_box">
                            <div class="col-md-12">
                                <div class="class_left">
                                    <img src="{{$course->image_url}}" class="img-responsive" alt=""/>
                                </div>
                                <div class="class_right" style="width: 60%; float: left; padding: 2%">
                                    <h3>
                                        @if(isset(Illuminate\Support\Facades\Auth::user()->id))
                                            <a href="course/{{$course->id}}" style="font-size: 25px">{!!$course->title!!}</a>
                                        @else
                                            <a href="{{route('fail')}}"> {!!$course->title!!} </a>
                                        @endif
                                    </h3><br>
                                    <p style="font-weight: bold">Course level : {{ $course->level }}</p><br>
                                    <div class="formal">
                                        @if(isset(Illuminate\Support\Facades\Auth::user()->id))
                                            <form action="like/{{$course->id}}" method="get">
                                                <button type="submit"
                                                        class="btn btn-primary glyphicon glyphicon-hand-up">
                                                    {{ count($course->like) }}</button>
                                            </form>
                                            <br><br>
                                            <h5>Comment ... <span class="glyphicon glyphicon-pencil"></span></h5><br>
                                            <form action="comment/{{$course->id}}" method="post" role="form">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="content" row="3"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary" style="float: right;">
                                                    Send
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            {{'No course!'}}
        @endif
        {!! $courses->links() !!}
    </div>
@endsection

{{-- </body>
</html> --}}