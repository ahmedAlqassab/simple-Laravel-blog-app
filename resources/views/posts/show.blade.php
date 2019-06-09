@extends('layouts.app')

@section('content')
    
<h1>{{$post->title}}</h1>
<img style="width:50%" src="{{asset('cover_images/'.$post->cover_image)}}">
<br><br>
@if (!Auth::guest())
    @if (Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST' , 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}

        <br><br>
    @endif
@endif
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <br><br>
    <a class="btn btn-secondary" href="/posts">Go Back</a>

@endsection