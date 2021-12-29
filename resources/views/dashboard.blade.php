@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3> {{ __('Your Blog Posts') }} </h3>
                    <hr>
                    @if (count($posts) > 0)
                    <table class="table table-striped table-bordered table-inverse table-responsive table-hover">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td><a href="/posts/{{$post->id}}">{{ $post->title }}</a></td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You don't have any post yet</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection