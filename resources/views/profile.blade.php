@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        <form class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <h5> {{ $user->name }} </h5>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <h5> {{ $user->email }} </h5>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                                <label for="user_name" class="col-md-4 control-label">User Name</label>
                                <div class="col-md-6">
                                    <h5> {{ $user->user_name }} </h5>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <label for="birthday" class="col-md-4 control-label">Birthday</label>
                                <div class="col-md-6">
                                    <h5> {{ $user->birthday }} </h5>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Address</label>
                                <div class="col-md-6">
                                    <h5> {{ $user->address }} </h5>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label for="weight" class="col-md-4 control-label">Weight</label>
                                <div class="col-md-6">
                                    <h5> {{ $user->weight }} </h5>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
                                <label for="job" class="col-md-4 control-label">Job</label>

                                <div class="col-md-6">
                                    <h5> {{ $user->job }} </h5>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="button" class="btn btn-primary"
                                            onclick="window.location='{{ route("editprofile", $user->id)  }}'">
                                        Edit Profile
                                    </button>

                                    <button type="button" class="btn btn-primary"
                                            onclick="window.location='{{ route("editpassword", $user->id)  }}'">
                                        Change password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
