<?php

use Illuminate\Database\Seeder;

class MusicScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('music_scores')->insert([
         'music_id' => 114514,
         'user_id' => 1,
         'difficulty_id' => 1,
         'play_count' => 1,
         'score' => 100,
         'clear' => 1
      ]);
      DB::table('music_scores')->insert([
        'music_id' => 114514,
        'user_id' => 1,
        'difficulty_id' => 2,
        'play_count' => 1,
        'score' => 100,
        'clear' => 1
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 114514,
       'user_id' => 1,
       'difficulty_id' => 3,
       'play_count' => 1,
       'score' => 80,
       'clear' => 1
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 114514,
       'user_id' => 1,
       'difficulty_id' => 3,
       'play_count' => 2,
       'score' => 95,
       'clear' => 1
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 114514,
       'user_id' => 1,
       'difficulty_id' => 4,
       'play_count' => 1,
       'score' => 20,
       'clear' => 1
      ]);
      
      DB::table('music_scores')->insert([
       'music_id' => 334334,
       'user_id' => 1,
       'difficulty_id' => 2,
       'play_count' => 1,
       'score' => 80,
       'clear' => 1
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 810893,
       'user_id' => 1,
       'difficulty_id' => 2,
       'play_count' => 1,
       'score' => 50,
       'clear' => 1
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 810893,
       'user_id' => 1,
       'difficulty_id' => 2,
       'play_count' => 1,
       'score' => 30,
       'clear' => 0
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 810810,
       'user_id' => 1,
       'difficulty_id' => 2,
       'play_count' => 1,
       'score' => 73,
       'clear' => 1
      ]);
      
      
      
      //User2
      DB::table('music_scores')->insert([
       'music_id' => 114514,
       'user_id' => 2,
       'difficulty_id' => 1,
       'play_count' => 1,
       'score' => 90,
       'clear' => 0
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 114514,
       'user_id' => 2,
       'difficulty_id' => 2,
       'play_count' => 1,
       'score' => 80,
       'clear' => 0
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 114514,
       'user_id' => 2,
       'difficulty_id' => 3,
       'play_count' => 1,
       'score' => 70,
       'clear' => 0
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 114514,
       'user_id' => 2,
       'difficulty_id' => 4,
       'play_count' => 1,
       'score' => 40,
       'clear' => 0
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 810893,
       'user_id' => 2,
       'difficulty_id' => 2,
       'play_count' => 1,
       'score' => 30,
       'clear' => 0
      ]);
      
      //存在しない
      /*
      DB::table('music_scores')->insert([
       'music_id' => 1,
       'difficulty_id' => 5,
       'play_count' => 1,
       'score' => 80,
       'clear' => 1
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 10,
       'difficulty_id' => 50,
       'play_count' => 1,
       'score' => 80,
       'clear' => 1
      ]);
      DB::table('music_scores')->insert([
       'music_id' => 101,
       'difficulty_id' => 2,
       'play_count' => 1,
       'score' => 80,
       'clear' => 1
      ]);
      */
    }
}
