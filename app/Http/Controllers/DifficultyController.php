<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Difficulty;

class DifficultyController extends Controller
{
  
  public function __construct()
  {
      
  }
  public function get(Request $request)
  {
    $type = $request->input('type');
    $difficulty = Difficulty::select('id','name','type');
    if (!empty($type)) {
      $difficulty->where('type', "=", $type);
    }
    return response()->json($difficulty->get());
  }
}
