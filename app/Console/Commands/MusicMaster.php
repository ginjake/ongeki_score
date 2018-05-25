<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Music;
use App\User;
use App\MusicScore;
use App\Difficulty;
use App\MusicDifficultyRelation;

class MusicMaster extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'master:music {id} {name} {artist} {level} {difficult} {notes_designer}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $music = Music::updateOrCreate(
      [
        'id' =>  $this->argument("id"),
        'name' => base64_decode($this->argument("name"))
      ],
      [
        'artist' => base64_decode($this->argument("artist"))
      ]
      );
      MusicDifficultyRelation::updateOrCreate(
        [
          'music_id' => $this->argument("id"),
          'difficulty_id' => Difficulty::get_id_from_name(base64_decode($this->argument("difficult")))
        ],
        [
          'level' => $this->argument("level"),
          'notes_designer' => base64_decode($this->argument("notes_designer"))
        ]
      );
      $response = array();
      $response['status'] = "OK";
      $response['name'] = base64_decode($this->argument("name"));
      $response['difficult'] = base64_decode($this->argument("difficult"));
      $response['level'] = $this->argument("level");
      print_r($response);
    }
}
