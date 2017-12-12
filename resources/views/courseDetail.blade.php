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

@extends('layouts.app')
@section('content')
    <div id="content">
        @if($course != '')
            <div class="container">
                <div class="classes_wrapper" style="padding: 4% 0">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="">{!!$course->title!!}</h3>
                            </div>
                            <div class="panel-body">
                                <div class="class_left" style="width: 40%; float: left">
                                    <img src="{{$course->image_url}}" class="img-responsive" alt=""/>
                                </div>
                                <div class="class_right" style="width: 60%; float: left; pading: 2%">
                                    <h5 style="font-weight: bold">Course level : {{$course->level}}</h5>
                                    <br><br><br>
                                    <h5>Comment:</h5><br>
                                    <div>
                                        <table width="auto" height="50px">
                                            @foreach($comments as $comment)
                                                <tr>
                                                    <td><p><b style="font-weight: bold"> {{$comment->user->name}} : </b></p></td>
                                                    <td><p> {{$comment->text}} </p></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{'No course!'}}
        @endif
    </div>
@endsection
