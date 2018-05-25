<?php

use Illuminate\Database\Seeder;

class DifficultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //
      DB::table('difficulties')->insert([
        'name' => 'BASIC',
        'type' => 1
      ]);
      DB::table('difficulties')->insert([
        'name' => 'ADVANCED',
        'type' => 1
      ]);
      DB::table('difficulties')->insert([
        'name' => 'EXPERT',
        'type' => 1
      ]);
      DB::table('difficulties')->insert([
        'name' => 'MASTER',
        'type' => 1
      ]);
      DB::table('difficulties')->insert([
        'name' => '黒',
        'type' => 2
      ]);
      DB::table('difficulties')->insert([
        'name' => '裏',
        'type' => 2
      ]);
      DB::table('difficulties')->insert([
        'name' => '重',
        'type' => 2
      ]);
      DB::table('difficulties')->insert([
        'name' => 'MASTER+',
        'type' => 2
      ]);
      DB::table('difficulties')->insert([
        'name' => '両',
        'type' => 3
      ]);
      DB::table('difficulties')->insert([
        'name' => '嘘',
        'type' => 3
      ]);
    }
}
