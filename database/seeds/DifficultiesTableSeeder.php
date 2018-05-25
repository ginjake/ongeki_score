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
        'priority' => 1
      ]);
      DB::table('difficulties')->insert([
        'name' => 'ADVANCED',
        'priority' => 1
      ]);
      DB::table('difficulties')->insert([
        'name' => 'EXPERT',
        'priority' => 1
      ]);
      DB::table('difficulties')->insert([
        'name' => 'MASTER',
        'priority' => 2
      ]);
      DB::table('difficulties')->insert([
        'name' => '黒',
        'priority' => 2
      ]);
      DB::table('difficulties')->insert([
        'name' => '裏',
        'priority' => 2
      ]);
      DB::table('difficulties')->insert([
        'name' => '重',
        'priority' => 2
      ]);
      DB::table('difficulties')->insert([
        'name' => 'MASTER+',
        'priority' => 2
      ]);
      DB::table('difficulties')->insert([
        'name' => '両',
        'priority' => 3
      ]);
      DB::table('difficulties')->insert([
        'name' => '嘘',
        'priority' => 3
      ]);
    }
}
