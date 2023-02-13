@extends('layout.main-layout')

@section('content')
  <h1 class="text-center">Contenuto pagina</h1>
  <ul>
    @foreach ($people as $person)
      <li class="my-4">
        <strong>User:</strong> {{$person -> name}} <br> 
        <strong>Email:</strong> {{$person -> mail}} <br>
        <strong>Phone:</strong> {{$person -> personDetail -> phone}} <br>
        <strong>Address:</strong> {{$person -> personDetail -> address}} <br>
        <img src="{{$person -> personDetail -> avatar}}" alt=""> <br>
        <hr>

        @if ($person -> posts -> count() > 0)
          <h3>Posts</h3>
          <ul>
            @foreach ($person -> posts as $post)
              <li class="my-4">
                <h4 class="text-primary">{{$post -> title}}</h4> <br>
                {{$post -> body}}
              </li>
              @endforeach
            </ul>
            <hr>
        @endif
      </li>
    @endforeach
  </ul>
@endsection