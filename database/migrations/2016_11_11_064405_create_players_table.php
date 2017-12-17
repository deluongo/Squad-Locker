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

              # System Fields
              $table->string('system')->default('ps4');
              $table->string('system_username')->default('');
              $table->string('system_password')->default('');
              # Park fields
              $table->string('rep_level')->default('');
              $table->integer('rep_progress')->default(0);
              $table->string('rep_status')->default('');
              $table->integer('status_level')->default(0);
              $table->integer('overall')->default(60);

              # Player profile fields
              $table->string('player_profile_pic')->default('https://s30.postimg.org/td1wyddf5/Baby_Face_Assasin.png');
              $table->string('player_bg_pic')->default('https://s23.postimg.org/s8md8kd3f/Player_Banner.jpg');
              $table->string('name')->unique();
              $table->string('archetype');
              $table->string('archetype2');
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
