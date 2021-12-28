@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-secondary my-3">Go back </a>
<h1 class="">{{$posts->title}}</h1>

<small>Written on {{$posts->created_at}}</small>
<div class="well">
    {!! $posts->body !!}
</div>
    
@endsection