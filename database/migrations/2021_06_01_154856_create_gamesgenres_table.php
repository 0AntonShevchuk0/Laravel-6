<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesgenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamesgenres', function (Blueprint $table) {
            $table->unsignedBigInteger('id_game');
            $table->unsignedBigInteger('id_genre');
            $table->timestamps();


            $table->foreign('id_game')
                ->references('id')
                ->on('games')
                ->onDelete('cascade')
                ->onUpdate('restrict');

            $table->foreign('id_genre')
                ->references('id')
                ->on('genres')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamesgenres');
    }
}
