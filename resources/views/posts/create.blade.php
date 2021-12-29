@extends('layouts.app')

@section('content')
<h2>Create Post</h2>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group my-3">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group my-3">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
    </div>
    <div class="form-group my-2">
        {{ Form::file('cover_image') }}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary my-3'])}}
{!! Form::close() !!}
    
@endsection