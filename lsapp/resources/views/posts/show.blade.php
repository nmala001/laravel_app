@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px">
        <h1>{{$post->title}}</h1>
        <div>
            {!!$post->body!!}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        <hr>
        <a href="http://localhost/lsapp/public/posts/{{$post->id}}/edit" class= "btn btn-default">Edit</a>
        <a href="http://localhost/lsapp/public/posts" class="btn btn-danger">Go Back</a>
        <hr>
        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
        {!!Form::close()!!}


    <div>
@endsection