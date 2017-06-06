<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePronotstiekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronostieks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firsthalfvic');
            $table->string('victorious');
            $table->string('score1');
            $table->string('score2');
            $table->boolean('bothteamscore');
            $table->boolean('goalguess');
            $table->string('firstgoal');
            $table->boolean('winwithoutextension');
            $table->string('cards');
            $table->string('corners');
            $table->boolean('penalties');
            $table->string('schiftings');
            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->integer('matchid')->unsigned();
            $table->foreign('matchid')->references('id')->on('matches')->onDelete('cascade');
            $table->integer('score');
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
        Schema::drop('pronostieks');
    }
}
