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
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
