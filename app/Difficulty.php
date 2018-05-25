<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
  public static function get_put_zero() {
    return array_column(self::all()->toArray(), null, 'id');
  }
  public static function get_id_from_name($name) {
    $difficulty_obj = self::select('id')->where('name','=',$name)->first();
    return (empty($difficulty_obj)? null: $difficulty_obj->id);
  }
}
