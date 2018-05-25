<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicDifficultyRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_difficulty_relations', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('music_id');
            $table->foreign('music_id')->references('id')->on('musics');
            $table->unsignedInteger('difficulty_id');
            $table->foreign('difficulty_id')->references('id')->on('difficulties');
            $table->double('level',8,2);
            $table->string('notes_designer')->nullable();
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
        Schema::dropIfExists('music_difficulty_relations');
    }
}
