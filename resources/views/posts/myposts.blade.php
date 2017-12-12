@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @if ( !$posts->count() )
                There is no post till now. Login and write a new post now!!!
            @else
                <div class="">
                    @foreach( $posts as $post )
                        {{--<div class="list-group" style="width: 90%">--}}
                        <div class="list-group-item" style="height: auto; border: hidden">
                            <div class="col-sm-10">
                                <h3><a href="{{ url('/'.$post->slug) }}"
                                       style="font-size: 25px; font-family: 'Courier New', Courier, monospace">{{ $post->title }}</a>
                                </h3><br>
                                {{ $post->created_at->format('M d,Y \a\t h:i a') }} By
                                <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a>
                            </div>

                            <div class="col-sm-2">
                                @if($post->active == '1')
                                    <a href="{{ url('edit/'.$post->slug)}}">Edit Post</a>
                                @else
                                    <a href="{{ url('edit/'.$post->slug)}}">Edit Draft</a>
                                @endif
                            </div>
                            <p><br></p>
                        </div>

                        <div class="list-group-item"
                             style="height: auto; border-left: hidden; border-right: hidden; border-bottom: hidden">
                            <article>
                                {!! str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
                            </article>
                        </div><br><br>
                    @endforeach
                    {!! $posts->render() !!}
                </div>
            @endif
        </div>
    </div>
@endsection
