@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    @if ( !$posts->count() )
                        There is no post till now. Login and write a new post now!!!
                    @else
                        <div class="">
                            @foreach( $posts as $post )
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <div class="col-md-8">
                                            <h3><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a></h3>
                                            {{ $post->created_at->format('M d,Y \a\t h:i a') }} By
                                            <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a>
                                        </div>
                                        <div class="col-md-offset-10">
                                            @if($post->active == '1')
                                                <input class="btn" >
                                                <a href="{{ url('edit/'.$post->slug)}}">Edit Post</a>
                                                </input>
                                            @else
                                                <input class="btn" style="float: right">
                                                <a href="{{ url('edit/'.$post->slug)}}">Edit Draft</a>
                                                </input>
                                            @endif
                                        </div>
                                        <p><br></p>
                                    </div>

                                    <div class="list-group-item">
                                        <article>
                                            {!! str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
                                        </article>
                                    </div>
                                </div>
                            @endforeach
                            {!! $posts->render() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
@endsection
