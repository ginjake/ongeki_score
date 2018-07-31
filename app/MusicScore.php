<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicScore extends Model
{
  protected $fillable = [
      'user_id',
      'music_id',
      'difficulty_id',
      'play_count',
      'over_damage_high_score',
      'battle_high_score',
      'technical_high_score',
      'play_count',
      'clear_flag',
      'bell_flag',
      'ab',
      'last_play'
  ];
}
