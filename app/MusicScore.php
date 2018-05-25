<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicScore extends Model
{
  protected $fillable = [
      'user_id', 'music_id', 'difficulty_id','play_count','score','clear',
  ];
}
