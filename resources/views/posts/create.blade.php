{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: atom--}}
{{--* Date: 12/1/17--}}
{{--* Time: 11:02 PM--}}
{{--*/--}}

@extends('layouts.app')
@section('title')
    Add New Post
@endsection
@section('content')
@section('content')
    <div class="container">
        <div class="row">
            <form action="/new-post" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <input required="required" value="{{ old('title') }}" placeholder="Enter title here"
                           type="text" name="title" class="form-control"/>
                </div>
                <div class="form-group">
                    <textarea name='body' class="form-control">{{ old('body') }}</textarea>
                </div>
                <input type="submit" name='publish' class="btn btn-success" value="Publish"/>
                <input type="submit" name='save' class="btn btn-default" value="Save Draft"/>
            </form>
        </div>
    </div>
@endsection