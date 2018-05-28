<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use App\User;
use App\MusicScore;
use App\Difficulty;
use Auth;

use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;

class MusicScoreController extends Controller
{
  
  public function __construct()
  {
      $this->middleware('auth')->except(['index']);
  }
  public function index(Request $request)
  {
      $get_data = $request->all();
      if (empty($get_data["user"])) {
        return response()->json(['status' => 'error', 'message' => 'userがありません']);
      } else {
        $user = $get_data["user"];
      }

      $user = User::select('id','name')->where('name', "=", $user)->first();
      $score_query = MusicScore::select(
                        'music_scores.play_count',
                        'music_scores.score',
                        'music_scores.clear',
                        'musics.id',
                        'musics.name',
                        'musics.artist',
                        'musics.updated_at',
                        'music_difficulty_relations.level',
                        'music_difficulty_relations.notes_designer',
                        'music_difficulty_relations.difficulty_id'
                        //'difficulties.name as difficult_name'
                        )
                      ->rightJoin('musics', 'music_scores.music_id', '=', 'musics.id')
                      ->rightJoin('music_difficulty_relations', function($join)
                      {
                          $join->on('music_scores.music_id', '=', 'music_difficulty_relations.music_id')
                          ->on('music_scores.difficulty_id', '=', 'music_difficulty_relations.difficulty_id');
                      })
                      //->rightJoin('difficulties', 'music_scores.difficulty_id', '=', 'difficulties.id')
                      ->where('music_scores.user_id',"=",$user->id);
      
      if (isset($get_data["level_start"])) {
        $score_query->where('music_difficulty_relations.level',">=",$get_data["level_start"]);
      }
      if (isset($get_data["level_end"])) {
        $score_query->where('music_difficulty_relations.level',"<=",$get_data["level_end"]);
      }
      
      if (isset($get_data["score_start"])) {
        $score_query->where('music_scores.score',">=",$get_data["score_start"]);
      }
      if (isset($get_data["score_end"])) {
        $score_query->where('music_scores.score',"<=",$get_data["score_end"]);
      }
      
      if (isset($get_data["play_count_start"])) {
        $score_query->where('music_scores.play_count',">=",$get_data["play_count_start"]);
      }
      if (isset($get_data["play_count_end"])) {
        $score_query->where('music_scores.play_count',"<=",$get_data["play_count_end"]);
      }
      
      if (isset($get_data["clear"])) {
        $score_query->where('music_scores.clear',"=",$get_data["clear"]);
      }
      if (isset($get_data["difficulty"])) {
        $score_query->where('difficulties.name',"=",$get_data["difficulty"]);
      }
      $scores = $score_query->get();
                      
      
      return response()->json( 
        [
          'user'=>$user,
          'scores' => $scores
        ]
      );
  }
  public function upload() {
    return view('music_scores.upload');
  }
  public function save_score(Request $request) {
    
    $file     = $request->file('csv_file');
    if ($file->getClientSize() > 1000000 || $file->getClientOriginalExtension() !== "csv") {
      $request->session()->flash('message', '登録失敗');
      return view('music_scores.upload');
    }
    $fileName = $file->getClientOriginalName(). '_'. time();
    $move     = $file->move(storage_path(). '/upload', $fileName);
    
    $config = new LexerConfig();
    $config->setDelimiter(",")
           ->setIgnoreHeaderLine(true);
           $interpreter = new Interpreter();
           
    $interpreter->addObserver(function(array $columns) {
        // CSVファイルを1行ずつ処理
        $difficult_id = Difficulty::get_id_from_name($columns[2]);
        if (!empty($difficult_id)) { //存在しない難易度は処理しない
          MusicScore::updateOrCreate(
            [
              'user_id' => Auth::user()['id'],
              'music_id' => $columns[0],
              'difficulty_id' =>$difficult_id
            ],
            [
              'play_count' =>  $columns[3],
              'score' =>  $columns[4],
              'clear' =>  $columns[5]
            ]
          );
        }
    });

    $request->session()->flash('message', '登録したでござる');
    $lexer = new Lexer($config);
    $lexer->parse($move, $interpreter);
    \File::delete($move);

    return view('music_scores.upload');
    
  }
}
