<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_scores', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('music_id');
            $table->unsignedInteger('difficulty_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('music_id')->references('id')->on('musics');
            $table->foreign('difficulty_id')->references('id')->on('difficulties');
            $table->integer('play_count');
            $table->integer('score');
            $table->integer('clear');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music_scores');
    }
}
