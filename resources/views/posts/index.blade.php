@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if (count($posts) > 0)
@foreach ($posts as $post)
    <div class="card card-body bg-light my-3">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid rounded" src="/storage/cover_images/{{$post->cover_image}}" alt="post-image">
            </div>
            <div class="col-md-8 col-sm-8">
                <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
            </div>
        </div>
        
    </div>
    
@endforeach
{{-- {{$posts->links()}} --}}
@else
    No Posts Found
@endif
    
@endsection