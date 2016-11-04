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

              # The rest of the fields...
              $table->string('name');
              $table->string('type');
              $table->string('role');
              $table->string('style');
              $table->string('team_grade');
              $table->string('skill_grade');
              $table->float('per');
              $table->float('fg%');
              $table->float('apg');
              $table->float('apg_ppg');
              $table->float('ppg');
              $table->float('rpg');

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
