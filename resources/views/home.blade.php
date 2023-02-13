@extends('layout.main-layout')

@section('content')
  <h1 class="text-center">Contenuto pagina</h1>
  <ul>
    @foreach ($people as $person)
        <li class="my-3">
          User: {{$person -> name}} <br> 
          Email: {{$person -> mail}} <br>
          Phone: {{$person -> personDetail -> phone}} <br>
          Address: {{$person -> personDetail -> address}} <br>
          <img src="{{$person -> personDetail -> avatar}}" alt=""> <br>
        </li>
    @endforeach
  </ul>
@endsection