<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams_players', function (Blueprint $table) {
            $table->increments('teams_players_id');
            $table->string('teams_players_name');
            $table->integer('teams_players_number');
            $table->string('teams_players_memo')->nullable();
            $table->integer('football_teams_id')->unsigned();

            $table->foreign('football_teams_id')->references('football_teams_id')->on('football_teams')
                                                ->onDelete('cascade')
                                                ->onUpdata('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teams_players');
    }
}
