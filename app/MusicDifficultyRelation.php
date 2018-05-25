<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicDifficultyRelation extends Model
{
  protected $fillable = [
      'music_id', 'difficulty_id', 'level','notes_designer',
  ];
}
