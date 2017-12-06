@extends('layouts.app')

@section('content')
    <div class="container">
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
                            <td>Course</td>
                            <td>Time</td><br>
                         </tr>

                        @foreach($registration as $regis)

                             <?php
                                $date = date('Y-m-d H:i:s');
                             $datetime1 = strtotime($date);
                             $datetime2 = strtotime($regis->created_at);
                             $secs = $datetime2 - $datetime1;
                              $days=  gmdate("d H:i:s",$secs);
                                     ?>
                            <tr>
                             <td><a href="CourseContent/{{$regis->course_id}}"> {{$regis->course->title}}</a></td>
                             <td>{{ $days}}</td><br>
                         </tr>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection