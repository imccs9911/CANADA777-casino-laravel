<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGamesessionId extends Migration
{
    /**
     * Run the migrations.
     * register user and game info that play games from api.
     * @return void
     */
    public function up()
    {
        Schema::create('user_gamesession_id', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();           
            $table->string('session_id')->nullable();                     
            $table->string('game_id')->nullable();                  
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
        Schema::dropIfExists('user_gamesession_id');
    }
}