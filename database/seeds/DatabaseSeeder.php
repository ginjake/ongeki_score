<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
           'name' => 'test',
           'email' => 'test@gmail.com',
           'password' => bcrypt('111111'),
       ]);
       DB::table('users')->insert([
          'name' => 'test2',
          'email' => 'test2@gmail.com',
          'password' => bcrypt('111111'),
      ]);
       $this->call([
           DifficultiesTableSeeder::class
        ]);
    }
}
