@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
        @if(count($posts)>0)
            @foreach($posts as $post)
                <div class= "well">
                    <h2><a href="http://localhost/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h2>
                    <p>{{$post->body}}</p>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No Posts Found</p>
        @endif
@endsection