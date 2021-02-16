<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogSidebarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_sidebars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('par');
            $table->string('button');
            $table->string('button_color');
            $table->string('image');
            $table->string('button_class');
            $table->string('div_class');
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
        Schema::dropIfExists('blog_sidebars');
    }
}
