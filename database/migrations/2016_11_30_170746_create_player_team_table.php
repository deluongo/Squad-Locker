<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_team', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            # 1 is ownership
            # 2 is on active roster
            # 3 invited, waiting response
            # 4 requested, waiting reponse
            $table->integer('player_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->tinyInteger('status')->default(0)->unsigned();

            # Make foreign keys
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('player_team');
    }
}
