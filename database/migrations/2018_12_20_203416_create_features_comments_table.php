<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feature_id');
            $table->unsignedBigInteger('user_id');
            $table->string('body');

            $table->foreign('feature_id')
                  ->references('id')->on('features')
                  ->onDelete('cascade');            

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('features_comments');
    }
}
