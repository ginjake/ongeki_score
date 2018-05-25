<?php

use Illuminate\Database\Seeder;

class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('musics')->insert([
         'name' => '四季',
         'id' => 114514,
         'artist' => 'ヴィヴァルディ'
       ]);
       DB::table('musics')->insert([
        'name' => 'レクイエム',
        'id' => 114515,
        'artist' => 'アマデウス'
      ]);
      DB::table('musics')->insert([
         'name' => '第九',
         'id' => 334334,
         'artist' => 'ベートーヴェン'
       ]);
       DB::table('musics')->insert([
          'name' => 'Ｇ線上のアリア',
          'id' => 810893,
          'artist' => 'バッハ'
        ]);
      DB::table('musics')->insert([
         'name' => '小フーガト短調',
         'id' => 810810,
         'artist' => 'バッハ'
       ]);
       
    }
}
