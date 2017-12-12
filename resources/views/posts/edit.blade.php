{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: atom--}}
{{--* Date: 12/1/17--}}
{{--* Time: 11:05 PM--}}
{{--*/--}}

@extends('layouts.app')
@section('title')
    Edit Post
@endsection
@section('content')
    <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
        tinymce.init({
            imageupload_url: "../../public/images",
            selector: "textarea",
            theme: "modern",
            language: "en",
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor jbimages"
            ],
            content_css: "css/app.css",
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages",
            relative_urls: false
        });
    </script>

    <div class="container" style="height: 470px">
        <div class="row">
            {{ csrf_field() }}
            @if (session('alert'))
                <div class="alert alert-success">
                    {{session('alert')}}
                </div>
            @endif
            <form method="post" action='{{ url("/update") }}'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="post_id" value="{{ $post->id }}{{ old('post_id') }}">
                <div class="form-group">
                    <input required="required" placeholder="Enter title here" type="text" name="title"
                           class="form-control" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}"/>
                </div>
                <div class="form-group">
    <textarea name='body' class="form-control">
      @if(!old('body'))
            {!! $post->body !!}
        @endif
        {!! old('body') !!}
    </textarea>
                </div>
                @if($post->active == '1')
                    <input type="submit" name='publish' class="btn btn-success" value="Update"/>
                @else
                    <input type="submit" name='publish' class="btn btn-success" value="Publish"/>
                @endif
                <input type="submit" name='save' class="btn btn-default" value="Save As Draft"/>
                <a href="{{  url('delete/'.$post->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Delete</a>
            </form>
        </div>
    </div>
@endsection