@extends('layouts.main-layout')
@section('content')
<main>
  <div class="container">
    <h2>Ciao a tutti</h2>
    <ul>
      @foreach ($matches as $match)
        <li>
          <a href="{{route('match', $match -> id)}}">
            Team1: {{$match -> team1}} {{$match -> points1}} <br> Team2: {{$match -> team2}} {{$match -> points2}}<br>Result: {{$match -> result}}
          </a>
          <a href="{{route('edit', $match -> id)}}">Edit</a> <a href="{{route('delete',$match -> id)}}">Delete</a>
        </li>
      @endforeach
    </ul>
  </div>
</main>
@endsection
