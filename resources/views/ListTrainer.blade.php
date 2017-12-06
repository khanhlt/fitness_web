@extends('layouts.app')

@section('content')
    <div class="container">
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
                                <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Purpose</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trainer as $tn)
                                    <tr class="odd gradeX" align="center">
                                        <td>{{$tn->id}}</td>
                                        <td><a href="courseTrainer/{{$tn->id}}">{{$tn->name}}</a> </td>
                                        <td>{{$tn->purpose}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection