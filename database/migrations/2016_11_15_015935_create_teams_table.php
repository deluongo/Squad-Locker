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
              $table->string('team_profile_pic')->default('https://goo.gl/eySC0g');
              $table->string('team_bg_pic')->default('https://goo.gl/VjZLRG');

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

              $table->integer('num_players')->default(0);
              # Social fields
              $table->string('twitter');
              $table->string('youtube');
              $table->string('twitch');

              #Player stats
              //$table->string('overall_talent_score');
              $table->float('per');
              $table->float('fg');
              $table->float('apg');
              $table->float('apg_ppg');
              $table->float('ppg');
              $table->float('rpg');

              #Colors
              $table->string('progress_chart_color');
              $table->string('progress_bar_color');
              $table->string('team_grade_color');
              $table->string('skill_grade_color');
              $table->string('per_color');
              $table->string('fg_color');
              $table->string('apg_color');
              $table->string('apg_ppg_color');
              $table->string('ppg_color');
              $table->string('rpg_color');

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
