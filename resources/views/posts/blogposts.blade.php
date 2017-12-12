@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if ( !$posts->count() )
                There is no post till now. Login and write a new post now!!!
            @else
                <div class="">
                    @foreach( $posts as $post )
                        <div class="list-group" style="width: 90%">
                            <div class="list-group-item" style="height: auto; border: hidden">
                                <h3><a href="{{ url('/'.$post->slug) }}"
                                       style="font-size: 25px; font-family: 'Courier New', Courier, monospace">{{ $post->title }}</a>
                                </h3><br>
                                <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a
                                            href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a>
                                </p>
                            </div>
                            <div class="list-group-item"
                                 style="height: auto; border-left: hidden; border-right: hidden; border-bottom: hidden">
                                <article>
                                    {!! str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
                                </article>
                            </div>
                            <br><br>
                        </div>
                    @endforeach
                    {!! $posts->render() !!}
                </div>
            @endif
        </div>
    </div>
@endsection
