<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {

              # Increments method will make a Primary, Auto-Incrementing field.
              # Most tables start off this way
              $table->increments('id');

              # This generates two columns: `created_at` and `updated_at` to
              # keep track of changes to a row
              $table->timestamps();

              # Owner
              $table->string('gamertag');
              # Team Settings
              $table->string('name');
              $table->string('abbreviation');
              $table->string('wins');
              $table->string('losses');
              $table->string('type');
              $table->string('affiliation');
              $table->string('tagline');


              $table->string('movement');
              $table->string('tempo');
              $table->string('offense');
              $table->string('defense');

              # Stats
              $table->string('team_grade');
              $table->string('skill_grade');

              $player_default = '';
              # Player fields
              $table->string('player1')->default($player_default);
              $table->string('player2')->default($player_default);
              $table->string('player3')->default($player_default);
              $table->string('player4')->default($player_default);
              $table->string('player5')->default($player_default);
              $table->string('player6')->default($player_default);
              $table->string('player7')->default($player_default);
              $table->string('player8')->default($player_default);
              $table->string('player9')->default($player_default);
              $table->string('player10')->default($player_default);

              # Social fields
              $table->string('twitter');
              $table->string('youtube');
              $table->string('twitch');

          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::drop('teams');
    }
}
