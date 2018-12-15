<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBackgroungimageToRecenrgameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recent_games', function (Blueprint $table) {
            $table->string('background_image')->after('id')
                            ->default('recent-game-bg.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recent_games', function (Blueprint $table) {
            $table->dropColumn('background_image');
           
        });
    }
}
