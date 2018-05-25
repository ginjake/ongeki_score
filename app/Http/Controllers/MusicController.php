<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use App\User;
use App\MusicScore;
use App\Difficulty;
use App\MusicDifficultyRelation;
use Auth;

use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;

class MusicController extends Controller
{
  
  public function __construct()
  {
      
  }
  public function index(Request $request)
  {

  }
}
