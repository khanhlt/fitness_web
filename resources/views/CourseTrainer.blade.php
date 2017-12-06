@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Course Title Trainer</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($registration as $regis)
                            <tr>
                                <td>{{$regis->course->title}}</td>
                            </tr>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection