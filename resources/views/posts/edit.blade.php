@extends('layouts.app')

@section('content')
<h2>Edit Post</h2>
{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group my-3">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group my-3">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
    </div>
    <div class="form-group my-2">
        {{ Form::file('cover_image') }}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary my-3'])}}
{!! Form::close() !!}
    
@endsection