@extends('layouts.app')
@section('content')
    <div id="content">
        @if($course != '')
            <div class="container">
                <div class="col-md-8">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h5 class="panel-title">{!!$course->title!!}</h5>
                        </div>
                        <div class="panel-body">
                            <h5>Course level : {{$course->level}}</h5>
                            <br>
                            <h5>Comment:</h5>
                            <?php
                                foreach ($comments as $comment) {
                                echo "<li margin-left=40px>" . $comment->text . "</li>";
                                echo "<br>";
                            }
                            ?>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <image width=300px height=auto max-height=400px
                           src="{{$course->image_url}}"></image>
                </div>
            </div>

        @else
            {{'No course!'}}
        @endif
    </div>
@endsection
