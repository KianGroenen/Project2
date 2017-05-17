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
        Schema::create('pronostieken', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('team1');
            $table->string('team2');
            $table->string('victorious');
            $table->string('score1');
            $table->string('score2');
            $table->string('firstgoal');
            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
;
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
        Schema::drop('pronostieken');
    }
}
