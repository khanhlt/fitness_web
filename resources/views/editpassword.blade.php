@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        @if (session('alert'))
                            <div class="alert alert-warning">
                                {{session('alert')}}
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{route('updatepassword', $user->id)}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Current Password</label>
                                <div class="col-md-6">
                                    <input id="current_password" type="password" class="form-control"
                                           name="current_password" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input id="new_password" type="password" class="form-control" name="new_password"
                                           required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('new_password_confirmation') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="new_password-confirmation" type="password" class="form-control"
                                           name="new_password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="submit" name='update' class="btn btn-primary" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
