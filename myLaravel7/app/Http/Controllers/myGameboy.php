<?php

namespace App\Http\Controllers;
use App\Match;
use Illuminate\Http\Request;

class myGameboy extends Controller
{
    public function home () {

      $name = "Mats";
      $matches = Match::all();
      return view('pages.home',compact('name','matches'));
    }

  public function match($id) {

    $match = Match::findOrFail($id);
    return view('pages.match',compact('match'));
  }

  public function edit($id) {

    $match = Match::findOrFail($id);
    return view('pages.edit', compact('match'));
  }

  public function update(Request $request, $id) {

    $validate = $request -> validate ([
      'team1' => 'required',
      'team2' => 'required',
      'points1' => 'required',
      'points2' => 'required',
      'result' => 'required'
    ]);

    $updata = Match::findOrFail($id);
    $updata -> update($validate);

    return redirect() -> route ('home');
  }

  public function delete($id) {

    $match = Match::findOrFail($id);
    $match -> delete();
    return redirect() -> route('home');
  }

  public function create() {

    return view('pages.create');
  }

  public function store(Request $request) {
    $validate = $request -> validate ([
      'team1' => 'required',
      'team2' => 'required',
      'points1' => 'required',
      'points2' => 'required',
      'result' => 'required'
    ]);

    $match = Match::create($validate);
    return redirect() -> route('home');
  }
}
