@extends('layout.main-layout')

@section('content')
  <h1 class="text-center">Posts</h1>
  <ul>
    @foreach ($posts as $post)
      <li class="my-3">
        <h3 class="text-primary">{{$post -> title}}</h3> <br>
        {{$post -> body}} <br>
        <strong>User:</strong> {{$post -> person -> name}}
      </li> 
    @endforeach    
  </ul>
@endsection