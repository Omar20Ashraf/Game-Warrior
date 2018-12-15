<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecentGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recent_games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('head');
            $table->string('head_button');
            $table->string('head_button_class');
            $table->string('image');
            $table->string('image_button');
            $table->string('image_button_class');
            $table->string('title');
            $table->string('par');
            $table->string('comments')->nullable();
            $table->integer('page_id')->nullable();
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
        Schema::dropIfExists('recent_games');
    }
}
