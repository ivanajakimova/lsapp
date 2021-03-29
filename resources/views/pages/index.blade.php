@extends('layout.app')

@section('content')
    <div class="jumbotron text-center">
        <h2>{{$title}}</h2>
        <p>This is home page</p>
        <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
        <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
    </div>
@endsection



