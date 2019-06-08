
@extends('layouts.app')
 
@section('content')
    <div class="jumbotron text-center">
        
        <h1>Welcome To My Blog</h1>
        <p>This is my simple Laravel Blog app</P>
        @guest
            <p>
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>

            </p>
        @else
            <p><a class="btn btn-danger btn-lg" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>
             
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form></p>
        @endguest
        
    </div>
@endsection   
 
   