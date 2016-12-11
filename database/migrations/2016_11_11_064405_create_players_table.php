<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {

              # Increments method will make a Primary, Auto-Incrementing field.
              # Most tables start off this way
              $table->increments('id');

              # This generates two columns: `created_at` and `updated_at` to
              # keep track of changes to a row
              $table->timestamps();

              # Account Settings
              //$table->string('email');
              //$table->string('username');
              //$table->string('password');

              # Paek fields
              $table->string('rep_level');
              $table->integer('rep_progress');
              $table->string('rep_status');
              $table->integer('status_level');

              # Player profile fields
              $table->string('player_profile_pic')->default('https://s3.amazonaws.com/thinkific/courses/course_card_image_000/004/5921439502331.original.jpg?1439502331');
              $table->string('player_bg_pic')->default('http://img.ecumenicalnews.com/full/16438/nba-2k17-legend-edition.jpg');
              $table->string('name')->unique();
              $table->string('archetype');
              $table->string('position');
              $table->string('affiliation');
              $table->text('tagline');
              //$table->string('bg_image');
              //$table->string('profile_pic');

              # Social fields
              $table->string('twitter');
              $table->string('youtube');
              $table->string('twitch');

              # Playstyle fields
              $table->string('type');
              $table->string('role');
              $table->string('style');

              #Player stats
              $table->string('overall_talent_score');
              $table->string('team_grade');
              $table->string('skill_grade');
              $table->float('per');
              $table->float('fg');
              $table->float('apg');
              $table->float('apg_ppg');
              $table->float('ppg');
              $table->float('rpg');

              #Colors
              $table->string('profile_pic_color');
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

              # FYI: We're skipping the 'tags' field for now; more on that later.

          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players');
    }
}
