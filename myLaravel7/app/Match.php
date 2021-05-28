<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
  protected $fillable = [
    "team1",
    "team2",
    "points1",
    "points2",
    "result",
  ];
}
