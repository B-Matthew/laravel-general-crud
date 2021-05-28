@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <form class="" action="{{route('store')}}"  method="POST">
        @csrf
        @method('POST')
        <label for="team1">Team1:</label>
        <input type="text" name="team1" value="">
        <label for="team2">Team2:</label>
        <input type="text" name="team2" value="">
        <label for="points1">Points1:</label>
        <input type="number" name="points1" value="">
        <label for="points2">Points2:</label>
        <input type="number" name="points2" value="">
        <label for="result">Result:</label>
        <input type="number" name="result" value="">
        <button type="submit" name="button">Edita Qui</button>
      </form>
    </div>
  </main>
@endsection
