@extends('layouts.app')

@section('content')
<h2>Create Post</h2>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary my-3'])}}
{!! Form::close() !!}
    
@endsection