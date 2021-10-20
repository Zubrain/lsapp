@extends('layouts.app')

@section('content')
<div class="jumbotron text-center bg-light my-5 py-5">
    <h1>{{$title}}</h1>
    <p>This is Laravel Application from the "Laravel from Scratch" Youtube Series</p>
    <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
</div>
    
@endsection
        
