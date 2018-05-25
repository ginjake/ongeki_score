<?php

use Illuminate\Database\Seeder;

class MusicDifficultyRelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('music_difficulty_relations')->insert([
         'music_id' => '114514',
         'difficulty_id' => '1',
         'level' => '1',
          'notes_designer' => 'ボーイズ'
       ]);
       DB::table('music_difficulty_relations')->insert([
          'music_id' => '114514',
          'difficulty_id' => '2',
          'level' => '4',
           'notes_designer' => 'ボーイズ'
       ]);
       DB::table('music_difficulty_relations')->insert([
          'music_id' => '114514',
          'difficulty_id' => '3',
          'level' => '12',
          'notes_designer' => 'ボーイズ'
       ]);
       DB::table('music_difficulty_relations')->insert([
          'music_id' => '114514',
          'difficulty_id' => '4',
          'level' => '21',
          'notes_designer' => 'takashi'
       ]);
       DB::table('music_difficulty_relations')->insert([
          'music_id' => '114514',
          'difficulty_id' => '6',
          'level' => '50',
          'notes_designer' => 'takashi'
       ]);
       DB::table('music_difficulty_relations')->insert([
          'music_id' => '114514',
          'difficulty_id' => '9',
          'level' => '3',
          'notes_designer' => 'takashi'
       ]);
       //２曲目
       DB::table('music_difficulty_relations')->insert([
          'music_id' => '334334',
          'difficulty_id' => '1',
          'level' => '1',
          'notes_designer' => 'takashi'
        ]);
        DB::table('music_difficulty_relations')->insert([
           'music_id' => '334334',
           'difficulty_id' => '2',
           'level' => '5',
           'notes_designer' => 'takashi'
        ]);
        DB::table('music_difficulty_relations')->insert([
           'music_id' => '334334',
           'difficulty_id' => '3',
           'level' => '14',
           'notes_designer' => 'hakase'
        ]);

        //3曲目
        DB::table('music_difficulty_relations')->insert([
           'music_id' => '810893',
           'difficulty_id' => '1',
           'level' => '2.5',
           'notes_designer' => 'hakase'
         ]);
         DB::table('music_difficulty_relations')->insert([
            'music_id' => '810893',
            'difficulty_id' => '2',
            'level' => '5.5',
            'notes_designer' => 'hakase'
         ]);
         DB::table('music_difficulty_relations')->insert([
            'music_id' => '810893',
            'difficulty_id' => '3',
            'level' => '14.5',
            'notes_designer' => 'yamada'
         ]);
         
         //4曲目
         DB::table('music_difficulty_relations')->insert([
            'music_id' => '810810',
            'difficulty_id' => '1',
            'level' => '7',
            'notes_designer' => 'yamada'
          ]);
          DB::table('music_difficulty_relations')->insert([
             'music_id' => '810810',
             'difficulty_id' => '2',
             'level' => '11',
             'notes_designer' => 'ほげ譜面チーム'
          ]);
          DB::table('music_difficulty_relations')->insert([
             'music_id' => '810810',
             'difficulty_id' => '3',
             'level' => '16',
             'notes_designer' => 'ほげ譜面チーム'
          ]);
          DB::table('music_difficulty_relations')->insert([
             'music_id' => '810810',
             'difficulty_id' => '5',
             'level' => '25',
             'notes_designer' => 'ほげ譜面チーム'
          ]);
    }
}
