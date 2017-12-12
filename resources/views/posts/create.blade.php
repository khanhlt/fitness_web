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