<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('team1');
            $table->string('team2');
            $table->string('firsthalfvic');
            $table->string('victorious');
            $table->string('score1');
            $table->string('score2');
            $table->string('firstgoal');
            $table->string('corners');
            $table->boolean('penalties');
            $table->string('timegoal1');
            $table->rememberToken();
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
        Schema::drop('matches');
    }
}
