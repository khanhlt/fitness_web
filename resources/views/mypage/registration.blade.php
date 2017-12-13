@extends('layouts.app')

@section('content')
    <div class="container" style="height: 470px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My page</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <tr>
                            <div class="col-md-6">
                                <td>Course</td>
                            </div>
                            <div class="col-md-6">
                                <td>Time</td>
                                <br>
                            </div>
                        </tr>

                        @foreach($registration as $regis)
                            <?php
                            $date = date('Y-m-d H:i:s');
                            $datetime2 = strtotime($date);
                            $datetime1 = strtotime($regis->created_at);
                            $secs = $datetime2 - $datetime1;
                            $days = gmdate("H:i:s", $secs);
                            ?>
                            <tr>
                                <div class="col-md-6">
                                    <td><a href="CourseContent/{{$regis->course_id}}"> {{$regis->course->title}}</a>
                                    </td>
                                </div>
                                <div>
                                    <td>{{ $days}}</td>
                                    <br>
                                </div>
                            </tr>
                        @endforeach
                    </div>
                    <div class="panel-heading">
                        <a href="{{route('home')}}"><button>Tutorial</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection