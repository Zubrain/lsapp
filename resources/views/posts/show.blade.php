@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-secondary my-3">Go back </a>
<h1 class="">{{$post->title}}</h1>

<small>Written on {{$post->created_at}}</small>
<div class="well">
    {!! $post->body !!}
</div>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary my-3">Edit Post </a>
{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger my-3'])}}
{!! Form::close() !!}
@endsection