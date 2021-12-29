@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-secondary my-3">Go back </a>

<div class="card card-body bg-light">
    <h1 class="">{{$post->title}}</h1>
    <img class="img-fluid rounded" src="/storage/cover_images/{{$post->cover_image}}" alt="post-image">
    {!! $post->body !!}
    <small>Written on {{$post->created_at}} by {{ $post->user->name }}</small>
</div>
<hr>
@if (!Auth::guest())
    @if (Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary my-3">Edit Post </a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-end']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger my-3'])}}
            {!! Form::close() !!}
    @endif
@endif

@endsection