@extends('layouts.main-layout')
@section('content')
<main>
  <div class="container">
    <h2>Match:</h2>
    <h3>
      Team1: {{$match -> team1}} {{$match -> points1}} <br>
      Team2: {{$match -> team2}} {{$match -> points2}}<br>
      Result: {{$match -> result}}
    </h3>
  </div>
</main>
@endsection
