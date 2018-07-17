
    @extends('layouts.app')

    @section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is my first Laravel Application from scratch inspired by one of the Laravel Youtube Series</p>
        <a class="btn btn-success btn-lg" href="http://localhost/lsapp/public/login" role="button">Login</a>
        <a class="btn btn-danger btn-lg" href="http://localhost/lsapp/public/register" role="button">Register</a>
    </div>
    @endsection
