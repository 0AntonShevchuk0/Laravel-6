<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamekeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamekeys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key_value');
            $table->unsignedBigInteger('id_game');
            $table->timestamps();

            $table->foreign('id_game')
                ->references('id')
                ->on('games')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamekeys');
    }
}
