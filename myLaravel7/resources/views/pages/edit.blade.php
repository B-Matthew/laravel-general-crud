@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <form class="" action="{{route('update', $match -> id)}}" method="POST">
        @csrf
        @method('POST')
        <label for="team1">Team1:</label>
        <input type="text" name="team1" value="{{$match -> team1}}">
        <label for="team2">Team2:</label>
        <input type="text" name="team2" value="{{$match -> team2}}">
        <label for="points1">Points1:</label>
        <input type="number" name="points1" value="{{$match -> points1}}">
        <label for="points2">Points2:</label>
        <input type="number" name="points2" value="{{$match -> points2}}">
        <label for="result">Result:</label>
        <input type="number" name="result" value="{{$match -> result}}">
        <button type="submit" name="button">Edita Qui</button>
      </form>
    </div>
  </main>
@endsection
