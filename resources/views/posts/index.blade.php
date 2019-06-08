@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach($posts as $post)
        <div class="card bg-light" style="margin-bottom: 10px">
            
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 col-sm-4">
                        <a href="/posts/{{$post->id}}"><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            
            </div>
            
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection