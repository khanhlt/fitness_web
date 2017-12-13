@extends('layouts.app')

@section('content')
    <div class="container" style="height: 470px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Trainer</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table>
                            <tr>
                                <div class="col-md-4">ID</div>
                                <div class="col-md-8">Name</div>
                            </tr>
                            <tr>
                                @foreach($trainer as $tn)
                                    <div class="col-md-4">{{$tn->id}}</div>
                                    <div class="col-md-8"><a href="courseTrainer/{{$tn->id}}">{{$tn->name}}</a></div>
                                @endforeach
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection