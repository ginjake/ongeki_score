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
            $table->string('over_damage_high_score');
            $table->unsignedInteger('battle_high_score');
            $table->unsignedInteger('technical_high_score');
            $table->unsignedInteger('play_count');
            $table->unsignedInteger('clear_flag');
            $table->unsignedInteger('bell_flag');
            $table->string('ab');
            $table->dateTime('last_play');
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
